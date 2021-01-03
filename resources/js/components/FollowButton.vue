<template>
    <div>
            <button @click="followUser" style="border-radius: 10px; background-color: rgb(0,172,243)" v-text="buttonText" class="btn btn-info"></button>
    </div>

</template>

<script>
import axios from 'axios'

export default {
    props: ['userId', 'follows'],

    name: "follow-button",

    data: function () {
        return {
            status: this.follows,
        }
    },

    methods: {
        followUser() {

            axios.post('/follow/'+ this.userId)
            .then(response => {
                this.status= ! this.status;
                //alert(response.data);
            })
            .catch(errors => {
                if (errors.response.status==401) {
                    window.location= '/login';
                }
            });

        }
    },
    computed: {
        buttonText() {
            return (this.status) ? 'Unfollow' : 'Follow';
        }
    }

}
</script>

<style scoped>

</style>
