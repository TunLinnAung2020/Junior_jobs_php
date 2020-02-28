<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="tecxt/css" href="assets/css/bootstrap.min.css">
        <script src="assets/js/vue.js"></script>
        <script src="assets/js/axios.min.js"></script>
    </head>
    <body>
        <div class="container">
            <category_list :category_data="categories"></category_list>
        </div>
    </body>
    <script src="cmponents/category-list.js"></script>
    <script type="text/javascript">
const element =new Vue({
    el:'.container',
    data:{
        categories:[],
    },
    mounted() {
        this.getJobs();
    },
    methods: {
        getJobs(){
            axios.get('/opt/lampp/htdocs/junior_job/app/Controller/read_category.php').then((response)=>{
                element.categories=response.data;
            }).catch((error)=>{
                console.log(errpr);
            });
        }
    }
});
</script>
</html>