<template>
    <div class="py-4">
        <div class="row row-cols-3">
            <div class="col" v-for="post in posts" :key="post.id">
                <div class="card">
                    <img :src="getCoverSrc(post)" class="card-img-top" alt="...">
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
            },
            getCoverSrc(post) {
                if(!post.cover_img) {
                    return "/img/placeholder.webp"
                }
                return post.cover_img
            }
        },

        mounted() {
            this.fetchPosts();
        }
    }
</script>

<style lang="scss">
    .card-img-top {
        aspect-ratio: 21 / 9;
        object-fit: cover;
    }
</style>