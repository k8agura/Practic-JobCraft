<template>
    <div>
        <form @submit="formSubmit">
            <button v-if="show" type="submit" class="w-100 btn btn-success">
                Откликнуться
            </button>
            <div v-else class="alert alert-success">
                Отклик был успешно отправлен
            </div>
        </form>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: ["jobid"],
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            show: true,
        };
    },

    methods: {
        formSubmit(e) {
            e.preventDefault();
            axios
                .post("/jobfinder/applications/" + this.jobid, {})
                .then((response) => {
                    this.show = false;
                });
        },
    },
};
</script>
