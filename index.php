<html>
    <head> 
        <title></title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/vue.js"></script>
        <script src="assets/js/axios.min.js"></script>
    </head>
    <body>
         <div class="container">
            <job_list :job_data="cotegories"></job_list> 
         </div>
    </body>
    <script src="components/job-list.js"></script>
    <script type="text/javascript">
const element =new Vue({
    el:'.container',
    data:{
        categories:[],
    },
    mounted() {
        this.getJObs();
    },
    methods: {
        getJobs() {
            axios.get('/opt/lampp/htdocs/junior_jobs/app/Controllers/read_job.php').then((response)=>{
                element.categories=response.data;
            }).catch((error)=>{
                cnsole.log(error);
            })
        }
    }
});
</script>
</html>