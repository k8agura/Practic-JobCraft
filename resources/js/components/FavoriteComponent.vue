<template>
    <div>
        <button
            v-if="show"
            @click.prevent="unsave()"
            class="w-100 btn btn-dark mt-1"
        >
            Удалить из списка
        </button>

        <button
            v-else
            @click.prevent="save()"
            class="w-100 btn btn-primary mt-1"
        >
            Сохранить вакансию
        </button>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: ["jobid", "favorited"],
    mounted() {
        this.show = this.jobFavorited ? ture : false;
    },
    data() {
        return {
            show: true,
        };
    },
    computed: {
        jobFavorited() {
            return this.favorited;
        },
    },
    methods: {
        save() {
            axios
                .post("/save/" + this.jobid)
                .then((response) => (this.show = true))
                .catch((error) => alert("error"));
        },
        unsave() {
            axios
                .post("/unsave/" + this.jobid)
                .then((response) => (this.show = false))
                .catch((error) => alert("error"));
        },
    },
};
</script>
