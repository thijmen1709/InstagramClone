<template>
    <div class="blog">
        <div>test</div>
        <sidebar-blog></sidebar-blog>
        <searchbar-blog></searchbar-blog>

    </div>
</template>

<script>
    import SidebarBlog from "./sidebar-blog";
    import SearchbarBlog from "./searchbar-blog";
    export default {
        name: 'blog',
        components: {SearchbarBlog, SidebarBlog}
    }

</script>
