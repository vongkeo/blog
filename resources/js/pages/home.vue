<template>
    <section>
        <div class="container">
            <!-- navbar  -->
            <navbar />

            <div
                class="jumbotron p-4 p-md-5 text-white rounded bg-dark"
                style="background:url('uploads/blog/1588479948.jpg')"
            >
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">
                        Title of a longer featured blog post
                    </h1>
                    <p class="lead my-3">
                        Multiple lines of text that form the lede, informing new
                        readers quickly and efficiently about what’s most
                        interesting in this post’s contents.
                    </p>
                    <p class="lead mb-0">
                        <a href="#" class="text-white font-weight-bold"
                            >Continue reading...</a
                        >
                    </p>
                </div>
            </div>
        </div>

        <main role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <h3 class="pb-4 mb-4   border-bottom">
                        Blog {{ posts.length }} posts
                    </h3>

                    <div class="blog-post">
                        <div
                            class="col-md-12"
                            v-for="(item, index) in posts"
                            :key="index"
                        >
                            <div
                                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                            >
                                <div class="col-auto d-none d-lg-block">
                                    <img
                                        class="bd-placeholder-img"
                                        width="200"
                                        height="250"
                                        src="/uploads/blog/1588479948.jpg"
                                        alt=""
                                    />
                                </div>
                                <div
                                    class="col p-4 d-flex flex-column position-static"
                                >
                                    <strong
                                        class="d-inline-block mb-2 text-success"
                                        >{{ item.title }}</strong
                                    >
                                    <h3 class="mb-0">Post title</h3>
                                    <div class="mb-1 text-muted">Nov 11</div>
                                    <p class="mb-auto">
                                        {{ item.body }}
                                    </p>
                                    <a href="#" class="stretched-link"
                                        >Continue reading</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.blog-post -->

                    <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="#">Older</a>
                        <a
                            class="btn btn-outline-secondary disabled"
                            href="#"
                            tabindex="-1"
                            aria-disabled="true"
                            >Newer</a
                        >
                    </nav>
                </div>
                <!-- /.blog-main -->

                <aside class="col-md-4 blog-sidebar">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4>About</h4>
                        <p class="mb-0">
                            Etiam porta <em>sem malesuada magna</em> mollis
                            euismod. Cras mattis consectetur purus sit amet
                            fermentum. Aenean lacinia bibendum nulla sed
                            consectetur.
                        </p>
                    </div>

                    <div class="p-4">
                        <h4>Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2014</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4>Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                        </ol>
                    </div>
                </aside>
                <!-- /.blog-sidebar -->
            </div>
            <!-- /.row -->
        </main>
        <!-- /.container -->

        <app-footer />
    </section>
</template>

<script>
import navbar from "~/components/navbar";
import AppFooter from "~/components/footer";
import categoryNavbar from "~/components/categoryNavbar";
import axios from "axios";
export default {
    components: {
        navbar,
        AppFooter,
        categoryNavbar
    },
    data() {
        return {
            posts: []
        };
    },
    created() {
        this.fetch();
    },
    methods: {
        async fetch() {
            try {
                const { data } = await axios.get(
                    "https://jsonplaceholder.typicode.com/posts"
                );
                this.posts = data;
            } catch (error) {
                console.log(error);
            }
        }
    }
};
</script>

<style></style>
