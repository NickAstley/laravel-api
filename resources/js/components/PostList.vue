<template>
    <div>
        <div class="row row-cols-3">
            <div class="col" v-for="post in posts" :key="post.id">
                <div class="card">
                    <img :src="'/storage/' + post.cover_img" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ post.title }}</h5>
                        <p class="card-text">{{ post.content }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Axios from 'axios';

    export default {
        data() {
            return {
                posts: []
            }
        },

        methods:  {
            fetchPosts() {
                Axios.get("/api/posts")
                    .then((resp) => {
                        this.posts = resp.data
                })
            }
        },

        mounted() {
            this.fetchPosts();
        }
    }
</script>