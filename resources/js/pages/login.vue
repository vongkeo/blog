<template>
    <div class="contianer">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form class="form-signin" @submit.prevent="signIn">
                            <img
                                class="mb-4"
                                src="/uploads/blog/1588480150.jpg"
                                alt=""
                                width="72"
                                height="72"
                            />
                            <h1 class="h3 mb-3 font-weight-normal">
                                Please sign in
                            </h1>
                            <label for="inputEmail" class="sr-only"
                                >Email address</label
                            >
                            <input
                                v-model="email"
                                type="email"
                                id="inputEmail"
                                class="form-control mb-3"
                                placeholder="Email address"
                                required=""
                                autofocus=""
                            />
                            <label for="inputPassword" class="sr-only"
                                >Password</label
                            >
                            <input
                                v-model="password"
                                type="password"
                                id="inputPassword"
                                class="form-control"
                                placeholder="Password"
                                required=""
                            />
                            <div class="checkbox mb-3">
                                <label>
                                    <input
                                        type="checkbox"
                                        value="remember-me"
                                    />
                                    Remember me
                                </label>
                            </div>
                            <button
                                class="btn btn-lg btn-primary btn-block"
                                type="submit"
                            >
                                Sign in
                            </button>
                            <p class="mt-5 mb-3 text-muted">© 2017-2020</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Axios from "axios";
export default {
    data() {
        return {
            email: "",
            password: ""
        };
    },
    methods: {
        async signIn() {
            try {
                const body = {
                    email: this.email,
                    password: this.password
                };
                const data = await Axios.post("/api/auth/login", body);
                console.log("response", data);
            } catch (error) {
                console.log(error);
            }
        }
    }
};
</script>

<style>
.form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
}
.form-signin .checkbox {
    font-weight: 400;
}
.form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
}
.form-signin .form-control:focus {
    z-index: 2;
}
.form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
</style>
