<?php $title = "GRU - Dashboard admin";

// $articles

 ob_start(); ?>
    <section class='section' >
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
                    <form action="api/script.php?action=uploadFiles" method="POST" 
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
                                                <input type="text" class="form-control" required name='name' placeholder="Description">
                                                <label for="name">Description:<span class="red">*</span> </label>
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
                                                <select class="form-select" id="category" name="category"
                                                 v-model="subcategory" required>
                                                    <option selected>Sous-catégorie</option>
                                                    <option value="infos">Informations</option>
                                                    <option value="gas">Règlements</option>
                                                    <option value="reports">Rapports</option>
                                                </select>
                                                <label for="category">Sous-catégorie <span class="red">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                        
                                       <div class="row g-3 mt-3">
                                     <div class="col-sm-6 col-md-3">
                                        <div class="form-floating">
                                            <input type="file" class="form-control"  accept="pdf"
                                            name='file' id="pic1"  required>
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


    </section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>