<template>
    <div>
        <h2>Articles </h2>

        <div class="card card-body mb-2" v-for="article in this.articles" v-bind:key="article.id">

            <h3>{{article.title}}</h3>
            <p>{{article.description}}</p>
            <p>Rating : {{article.ratings[0].rating}}</p>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                articles: [],
                article:{
                    id: '',
                    name: '',
                    description: '',
                    ratings: ''
                },
                book_id: '',
                pagination: {},
                edit: false
            };
        },

        created(){
            this.fetchBooks()
        },

        methods:{
            fetchBooks(){
                fetch('api/book')
                    .then(res => res.json())
                    .then(res =>{
                        this.articles = res.data;
                       // console.log(articles);
                });

            }
        }
    };
</script>