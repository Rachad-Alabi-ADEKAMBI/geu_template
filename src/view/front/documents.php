<?php $title = "GRU - Documents";

// $articles

ob_start(); ?>
    <section class='section mt-5 pt-5' id='app'>
        <div class="container documents">
            <h1 class="text-center">
                Documents
            </h1>

            <div class="row documents__list">
                <div class="col-sm-12 col-md-6 documents__list__item mt-3" 
                      v-for="detail in details" :key="detail.id"  @click='goToFile(detail.file)'>
                    <i class="bi bi-file-earmark"></i>
                    <h2>
                        {{ detail.name }}
                    </h2>

                    <div class="doc">
                        {{ detail.file }}
                    </div>
                </div>
            </div>
        </div>    
    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>

<!-- Include Vue.js and Axios -->
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    new Vue({
        el: '#app',
        data: {
            details: []
        },
        mounted() {
            this.displayAll();
        },
        methods: {
            displayAll() {
                axios.get('api/script.php?action=simpleDocs')
                    .then((response) => {
                        console.log(response.data);
                        this.details = response.data;
                    })
                    .catch((error) => {
                        console.error(error);
                        alert('Failed to fetch data');
                    });
            },
            goToFile(file) {
                // Your logic to navigate to the file or do something with the file id
                window.location.replace("public/documents/"+ file);
            }
        }
    });
</script>
