<template>
    <div>
        <Navbar></Navbar>
        <div class="container">
            <PostList></PostList>
        </div>
    </div>
</template>

<script>
    import Navbar from "./components/Navbar.vue";
    import PostList from "./components/PostList.vue";
    export default {
        components: { Navbar, PostList }
    }
</script>