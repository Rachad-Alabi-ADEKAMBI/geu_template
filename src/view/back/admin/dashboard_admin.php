<?php $title = "GRU - панель адміністратора";

// $articles

 ob_start(); ?>
    <section class='section' id='app' >
        <h1 class="text-center">
            Інформаційна панель адміністратора
        </h1>

        <!--menu-->
            <div class="row">
                <div class="col-sm-12 mt-1 text-center">
                                    <div class="menu">
                    <button class="btn btn-primary m-2" @click="displayAll()">
                        <i class="bi bi-plus-circle"></i> Додати файли
                    </button>

                    <button class="btn btn-primary m-2" @click="displayfiles()">
                        <i class="bi bi-file-earmark"></i> Файли
                    </button>

                    <button class="btn btn-primary m-2" @click="displayUsers()">
                        <i class="bi bi-people"></i> <i class="bi bi-users"></i> Користувачі
                    </button>
                    </div>

                </div>
            </div>
        <!--end menu-->

            <!--upload files-->
                <div class="col-sm-12 col-md-7 mt-4 mx-auto" v-if='showNewDoc=true'>
                    <div class="bg-dark border p-3 rounded wow">
                        <form action="api/script.php?action=newDoc" method="POST" enctype='multipart/form-data'>
                            <span class="ml-0" @click="displayAll()">
                                <i class="bi bi-x-circle-fill close text-primary"></i>
                            </span>

                            <h1 class="mx-auto text-center">Додавання PDF файлів</h1>
                            <div class="row g-3">
                                <p class="text-center">
                                    Не потрібно вибирати підкатегорію, якщо файл є<br>
                                    простим документом (не для газу чи електрики),<br>
                                    приймаються лише PDF файли
                                </p>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" required name='name' placeholder="Ім'я">
                                        <label for="name" class="text-black"> Ім'я:<span class="red">*</span> </label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" required name='description' placeholder="Опис">
                                        <label for="description" class="text-black">Опис:<span class="red">*</span> </label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="category" name="category" v-model="category" required>
                                            <option value="docs">Документи</option>
                                            <option value="gas">Газ</option>
                                            <option value="electricity">Електрика</option>
                                        </select>
                                        <label for="category">Категорія <span class="red">*</span></label>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="form-floating">
                                        <select class="form-select" id="subcategory" name="subcategory" v-model="subcategory" required>
                                            <option value="infos">Інформація</option>
                                            <option value="regulations">Регламенти</option>
                                            <option value="reports">Звіти</option>
                                        </select>
                                        <label for="subcategory">Підкатегорія</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mt-3">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" accept="application/pdf" name='file' id="file" required>
                                        <label for="file">Файл <span class="red">*</span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3 mt-4">
                                <div class="col-sm-12 col-md-4 mx-auto text-center">
                                    <button class="btn btn-success w-100 py-3 mb-3" type="submit">Додати</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <!--end upload-->

        <!--documents-->
        <div class="col-sm-12 col-md-8 mx-auto" v-if="showDocs=true">
            <div class="mt-2 table-container">
            <table class="table table responsive">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
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
                details: [],
            },
            mounted() {
                this.displayDocs();
            },
            methods: {
                displayDocs() {
                    this.showDocs = false;
                    this.showNewDoc = false;
                    this.showUsers = false;
                    axios.get('api/script.php?action=allDocs')
                        .then((response) => {
                            console.log(response.data);
                            this.details = response.data;
                        })
                        .catch((error) => {
                            console.error(error);
                            alert('Failed to fetch datas');
                        });
                },
                displayNewDoc() {
                    this.showDocs = false;
                    this.showNewDoc = true;
                    this.showUsers = false
                },
                displayUsers() {
                    this.showDocs = false;
                    this.showNewDoc = true;
                    this.showUsers = false;
                 },
                format(num) {
                    return new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 3 }).format(num);
                },
                formatDate(da) {
                    const [datePart, timePart] = da.split(' ');
                    const [year, month, day] = datePart.split('-');
                    return `${day}-${month}-${year}`;
                },
                deleteDoc(id){
                        window.location.replace('./api/script.php?action=deleteDoc&id='+id);
                },
           }
        });
</script>