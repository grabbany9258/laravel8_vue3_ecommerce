<template>
    <div>
        <a @click.prevent="addtobasket()" href><i class="icon-shopping-cart2"></i> Order Now</a>
    </div>
</template>
<script>
export default {

    props: {
        product_id: ''
    },
    data() {
        return {

        }
    },
    methods: {
        addtobasket() {
            axios.post('/basket', { prId: this.product_id }).then((res) => { console.log(res.data); })
            // alert(this.product_id);
        }
    }

}
</script>
<style ></style>