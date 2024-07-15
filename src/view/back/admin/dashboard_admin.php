<?php $title = "GRU - Dashboard admin";

// $articles

 ob_start(); ?>
    <section class='section' id='app' >
        <h1 class="text-center">
            Dashboard admin
        </h1>

        <!--menu-->
            <div class="row">
                <div class="col-sm-12 mt-1 text-center">
                                <div class="menu">
                                            <button class="btn btn-primary m-2" @click="displayAll()" >
                                            <i class="fas fa-list"></i> Ajouter fichiers
                                            </button>

                                            <button class="btn btn-primary m-2" @click="displayfiles()" >
                                            <i class="fas fa-list"></i> Fichiers
                                            </button>

                                            <button class="btn btn-primary m-2" @click="displayUsers()" >
                                            <i class="fas fa-list"></i> Clients
                                            </button>
                                </div>
                </div>
            </div>
        <!--end menu-->

        <!--upload files-->
        <div class="col-sm-12 col-md-7 mt-4 mx-auto">
                <div class="bg-white border rounded wow">
                    <form action="api/script.php?action=newDoc" method="POST" 
                                        enctype='multipart/form-data'>
                                        <span class="ml-0" @click="displayAll()">
                                            <i class="fa fa-times me-3 text-blue"></i>
                                        </span>

                                        <h1 class="mx-auto text-center">Ajout de fichiers</h1>
                                       <div class="row g-3">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" required name='name' placeholder="Nom">
                                                <label for="name">Nom:<span class="red">*</span> </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" required name='description' placeholder="Description">
                                                <label for="description">Description:<span class="red">*</span> </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-floating">
                                                <select class="form-select" id="category" 
                                                    name="category" v-model="category" required>
                                                    <option selected>Catégorie</option>
                                                    <option value="docs">Documents</option>
                                                    <option value="gas">Gaz</option>
                                                    <option value="electricity">Electricité</option>
                                                </select>
                                                <label for="category">Catégorie <span class="red">*</span></label>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-floating">
                                                <select class="form-select" id="category" name="subcategory"
                                                 v-model="subcategory" required>
                                                    <option selected>Sous-catégorie</option>
                                                    <option value="infos">Informations</option>
                                                    <option value="gas">Règlements</option>
                                                    <option value="reports">Rapports</option>
                                                </select>
                                                <label for="subcategory">Sous-catégorie <span class="red">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                        
                                       <div class="row g-3 mt-3">
                                     <div class="col-sm-6 col-md-3">
                                        <div class="form-floating">
                                            <input type="file" class="form-control"  accept="*"
                                            name='file' id="file"  required>
                                            <label for="pic1">Fichier <span class="red">*</span></label>
                                        </div>
                                    </div>
                                   </div>

                                    <div class="row g-3 mt-4">
                                        <div class="col-sm-12 col-md-4 mx-auto text-center">
                                            <button class="btn btn-success w-100 py-3 mb-3" type="submit">Ajouter</button>
                                        </div>
                                    </div>
                    </form>
                </div>
                </div>
        </div>
        <!--end upload-->

        <!--documents-->
        <div class="col-sm-12 col-md-8 mx-auto">
            <div class="mt-2 table-container">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Nom</th>
                                            <th>Catégorie</th>
                                            <th>Sous-catégorie</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="Date"> ygyu </td>
                                            <td data-label="Catégorie">ygy</td>
                                            <td data-label="Action">uhui </td>
                                            <td data-label="Ville"> gi </td>
                                        </tr>
                                    </tbody>
                                </table>
            </div>
        </div>
        <!--end documents-->


    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>

<script>
        new Vue({
            el: '#app',
            data: {
                showDocs: true,
                showNewDoc: false,
                showUsers: false,
                detailss: [],
                currentPage: 1,
                itemsPerPage: 5,
            },
            mounted() {
                this.displayAll();
            },
            computed: {
                    totalPages() {
                            return Math.ceil(this.details.length / this.itemsPerPage);
                            },
                    paginatedData() {
                            const start = (this.currentPage - 1) * this.itemsPerPage;
                            const end = start + this.itemsPerPage;
                            return this.details.slice(start, end);
                            }
            },
            methods: {
                displayAll() {
                    this.showDocs = false;
                    this.showNewDoc = false;
                    this.showUsers = false;
                    axios.get('api/script.php?action=allDocs')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                            this.showAll = true;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch datas');
                        });
                },
                displayUsers() {
                    this.showAll = false;
                    this.showNeeds = false;
                    axios.get('api/script.php?action=users')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                            this.showUsers = true;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch user data.');
                        });
                },
                displayNeeds() {
                    this.showAll = false;
                    this.showUsers = false;
                    axios.get('api/script.php?action=needs')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                            this.showNeeds = true;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch needs data.');
                        });
                },
                format(num) {
                    return new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
                },
                formatDate(da) {
                    const [datePart, timePart] = da.split(' ');
                    const [year, month, day] = datePart.split('-');
                    return `${day}-${month}-${year}`;
                },
                getImgUrl(pic) {
                    return "public/img/" + pic;
                },
                pauseUser(id){
                        window.location.replace('./api/script.php?action=pauseUser&id='+id);
                },
                deleteUser(id){
                        window.location.replace('./api/script.php?action=deleteUser&id='+id);
                },
                authorizeUser(id){
                        window.location.replace('./api/script.php?action=authorizeUser&id='+id);
                },
                stop(id){
                        window.location.replace('./api/script.php?action=stop&id='+id);
                },
                publish(id){
                        window.location.replace('./api/script.php?action=publish&id='+id);
                },
                previousPage() {
                        if (this.currentPage > 1) {
                            this.currentPage--;
                        }
                        },
                nextPage() {
                        if (this.currentPage < this.totalPages) {
                            this.currentPage++;
                        }
                    },
                gotoPage(page) {
                    this.currentPage = page;
                },
            }
        });
</script>