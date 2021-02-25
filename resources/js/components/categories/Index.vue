<template>
    <div>
        <category v-if="add_category" :edit="editing"></category>
        <!-- Main content -->
        <section class="content" v-if="!add_category">
            <!-- Default box -->
            <div class="box">
                <div class="box-body">
                    <v-app id="inspire">
                        <v-card>
                            <v-card-title>
                                Categories
                                <v-spacer></v-spacer>
                                <v-text-field
                                    v-model="search"
                                    append-icon="mdi-magnify"
                                    label="Search"
                                    single-line
                                    hide-details
                                ></v-text-field>
                                <v-spacer></v-spacer>
                                <v-btn small color="indigo" dark @click="add_category=true">Add Category</v-btn>
                            </v-card-title>
                            <v-data-table
                                :headers="headers"
                                :items="tableData"
                                :search="search"
                                item-key="name"
                                class="elevation-1"
                                :footer-props="{
                              showFirstLastPage: true,
                              firstIcon: 'mdi-arrow-collapse-left',
                              lastIcon: 'mdi-arrow-collapse-right',
                              prevIcon: 'mdi-minus',
                              nextIcon: 'mdi-plus'
                              }"
                            >

                                <template v-slot:item.actions="{ item }">
                                    <v-btn class="mx-1 my-1" fab dark color="indigo" small>
                                        <v-icon dark small @click="editCategory(item)">mdi-pencil</v-icon>
                                    </v-btn>

                                    <v-btn class="mx-1 my-1" fab color="" small>
                                        <v-icon  small @click="deleteCategory(item.id)">mdi-delete</v-icon>
                                    </v-btn>
                                </template>
                            </v-data-table>
                        </v-card>
                    </v-app>
                </div>
            </div>
        </section>
    </div>
</template>
<script>

    import Category from "./Category";
    import {mapGetters} from "vuex";
    import FieldDefs from "./FieldDefs";
    export default {
        data(){
            return {
                add_category: false,
                editing: false,
                search:'',
                headers: FieldDefs,
            }
        },
        created(){
            this.$store.dispatch("fetchCategories");
            this.listen();
        },
        computed:{
          ...mapGetters({
              tableData:'getCategories'
          })
        },
        methods:{
            editCategory(category){
                this.$store.dispatch('fetchCategory',category)
                    .then(() =>{
                        this.editing=true;
                        this.add_category=true;
                    })
            },
            deleteCategory(id){
                axios.delete(`categories/${id}`)
                    .then(res => {
                        console.log('deleted'+id)
                        for (let i=0;i<this.tableData.length;i++){
                            if (this.tableData[i].id == res.data){
                                this.tableData.splice(i,1);
                            }
                        }
                    })
                    .catch(error => Exception.handle(error))
            },
            listen(){
                eventBus.$on('listCategory',(category) =>{
                    console.log("walla")
                    this.add_category =false;
                });
                eventBus.$on('cancel',()=>{
                    this.add_category = false;
                    this.editing = false;
                });
                eventBus.$on('updateCategory',(category)=>{
                    this.add_category = false;
                    this.editing = false;
                    for (let i=0;i<this.tableData.length;i++){
                        if (this.tableData[i].id == category.id){
                            this.tableData.splice(i,1);
                        }
                    }
                    this.tableData.unshift(category);
                });
            },

        },
        components:{
            Category
        }
    }
</script>

<style scoped>

</style>
