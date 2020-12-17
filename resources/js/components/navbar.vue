<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand" href="#">Devla Media</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarsExample09"
            aria-controls="navbarsExample09"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav ml-auto">
                <li
                    class="nav-item"
                    v-for="(item, index) in items"
                    :key="index"
                >
                    <router-link
                        class="nav-link text-capitalize"
                        :to="item.path"
                    >
                        {{ item.name }}</router-link
                    >
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdown09"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Get Started</a
                    >
                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                        <router-link class="dropdown-item" to="/login">
                            Login</router-link
                        >
                        <router-link class="dropdown-item" to="/register">
                            Register</router-link
                        >
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            items: [
                {
                    name: "home",
                    path: "/"
                },
                {
                    name: "blog",
                    path: "/blog"
                },
                {
                    name: "contact",
                    path: "/contact"
                },
                {
                    name: "about",
                    path: "/about"
                }
            ]
        };
    }
};
</script>

<style></style>
