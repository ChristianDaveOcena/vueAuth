<template>
    <div class="container">
        <h2 class="text-center">Create product</h2>
        <h5 class="text-center">All Fileds are Required</h5>
        <div class="row">
            <div class="col-md-12">
                <router-link :to="{ name: 'ProductIndex' }" class="btn btn-primary btn-sm float-right mb-2">Back</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" required class="form-control" v-model="product.name" >
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="category"  class="form-control" v-model="product.category" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" name="description" rows="5" class="form-control" v-model="product.description" required></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" v-model="product.price">
                    </div> -->
                    <button type="button" class="btn btn-primary" @click="createProduct()">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                product: {},
            }
        },
        methods: {
             createProduct() {

                this.axios.post('http://127.0.0.1:8000/api/products', this.product)
                    .then(response => (
                        this.$router.push({ name: 'ProductIndex' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>