<template>
<div class="container">
    <div class="row">
    <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading" id="accordion">
                    <i class="fas fa-comments"></i> Chat
                    <div class="btn-group pull-right">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            <div class="panel-collapse collapse" id="collapseOne">
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix" v-for="comment in comments">
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">{{ comment.user.name }}</strong> <small class="pull-right text-muted">
                                        <i class="fas fa-clock"></i>12 mins ago</small>
                                </div>
                                <p>
                                    {{ comment.body }}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." v-model="body" @keyup.enter="postComment()" />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat" @click.prevent="postComment()">
                                Send</button>
                        </span>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1>
                {{ count }} watching now
            </h1>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: ['userId', 'watch', 'code'],
        data() {
            return {
                viewers: [],
                comments: [],
                body: '',
                count: 0
            }
        },
        mounted() {
            this.listen();
            this.getComments();
        },
        methods: {
            getComments() {
                axios.get('/api/watch/'+ this.code +'/comments', {})
                .then((response) => {
                    this.comments = response.data;
                });
            },
            postComment() {
                axios.post('/api/watch/'+ this.code +'/comment', {
                    body: this.body,
                    video_id: this.code,
                    user_id: this.userId,
                })
                .then(response => {
                    this.comments.unshift(response.data);
                    console.log(response.data);
                });
            },
            listen() {
                Echo.join('watch')
                    .here((users) => {
                        this.count = users.length;
                    })
                    .joining((user) => {
                        this.count++;
                    })
                    .leaving((user) => {
                        this.count--;
                    })
                    .listen('NewComment', (e) => {
                        this.comments.unshift(e);
                    });
            }
        }
    }
</script>