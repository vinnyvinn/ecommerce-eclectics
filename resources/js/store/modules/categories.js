import Exception from "../../helpers/Exception";

export const Categories = {
    state:{
        categories:[],
        category:[],
    },
    getters:{
    getCategories(state){
        return state.categories;
    },
        getCategory(state){
        return state.category;
    },
    },
    mutations:{
        fetchCategories(state,data){
            state.categories = data;
        },
        fetchCategory(state,data){
            state.category = data;
        },
        updateCategory(state,data){
            state.categories.unshift(data)
        }
    },
    actions:{
    fetchCategories({commit}){
        axios.get("/categories")
            .then(res => {
               commit("fetchCategories",res.data)
            }).catch(err => {
                Exception.handle(err);
        })
    },
       fetchCategory({commit},data){
        commit("fetchCategory",data);
       },
        updateCategory({commit},data){
        commit("updateCategory",data);
       },
    }
}
