<template>
    <div class="d-flex justify-content-center align-items-baseline shop-width">
        <button type="button" class="btn-decrement" v-on:click.prevent="decrement">-</button>
        <p class="px-3">{{ count }}</p>
        <button type="button" class="btn-increment" v-on:click.prevent="increment">+</button>
    </div>
</template>

<script>
    export default {
        data: ()=> {
            return {
                count: 0
            }
        },
        methods: {
            increment () {
                this.count++;
            },
            decrement () {
                if(this.count > 0){
                    this.count-- ;
                }
            }
        }
    }
</script>
