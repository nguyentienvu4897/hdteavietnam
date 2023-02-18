<template>
<!-- partial -->
<div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Danh sách loại dịch vụ</h4>
            <p class="card-description">Thêm mới hoặc sửa loại dịch vụ</p>
            <vs-button type="gradient" style="float:right;" @click="popupActivo=true">Thêm mới</vs-button>
            <vs-input
                icon="search"
                placeholder="Search"
                v-model="keyword"
                @keyup="searchCategory()"
            />
            <vs-table max-items="5" pagination :data="list">
                <template slot="thead">
                <vs-th>ID</vs-th>
                <vs-th>Tên</vs-th>
                <vs-th>Avatar</vs-th>
                <vs-th>Danh mục</vs-th>
                <vs-th>Hành động</vs-th>
                </template>
                <template slot-scope="{data}">
                <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                    <vs-td :data="tr.id">{{tr.id}}</vs-td>
                    <vs-td :data="tr.name">{{JSON.parse(tr.name)[0].content}}</vs-td>
                    <vs-td :data="tr.id">
                    <vs-avatar size="70px" :src="tr.avatar" />
                    </vs-td>
                    <vs-td :data="tr.id">{{ JSON.parse(getCategoryName(tr.category_id))[0].content }}</vs-td>
                    <vs-td :data="tr.id">
                    <router-link :to="{name:'editServiceCategoryType',params:{id:tr.id}}">
                        <vs-button
                        vs-type="gradient"
                        size="lagre"
                        color="success"
                        icon="edit"
                        ></vs-button>
                    </router-link>
                    <vs-button vs-type="gradient" size="lagre" color="red" icon="delete_forever" @click="confirmDestroy(tr.id)"></vs-button>
                    </vs-td>
                </vs-tr>
                </template>
            </vs-table>
            </div>
        </div>
        </div>
    </div>
    <vs-popup style="width:100%;" title="Thêm mới loại dịch vụ" :active.sync="popupActivo">
        <ModalAdd @closePopup="closePop($event)" />
    </vs-popup>
</div>
</template>


<script>
import ModalAdd from "../../layouts/modal/services/addType";

import { mapActions } from "vuex";
export default {
data: () => ({
    keyword: null,
    popupActivo: false,
    list: [],
    timer:0,
    id_item :'',
    listCategory: []
}),
components: {
    ModalAdd
},
computed: {
    
},
created() {
    this.listServiceCategory().then( response => {
            this.listCategory = response.data
        })
},
methods: {
    ...mapActions(["listServiceType", "deleteServiceType", "loadings", "listServiceCategory"]),
    closePop(event) {
    this.listType();
    this.popupActivo = event;
    },
    listType() {
    this.loadings(true);
    this.listServiceType({ keyword: this.keyword })
    .then(response => {
        this.loadings(false);
        this.list = response.data;
        });
    },
    searchCategory() {
    if (this.timer) {
        clearTimeout(this.timer);
        this.timer = null;
    }
    this.timer = setTimeout(() => {
        this.listServiceType({ keyword: this.keyword })
        .then(response => {
            this.loadings(false);
            this.list = response.data;
            });
    }, 800);
    },
    destroy(){
    this.loadings(true);
    this.deleteServiceType({id:this.id_item})
    .then(response => {
        this.listType();
        this.loadings(false);
        this.$success('Xóa loại dịch vụ thành công');
    });
    },
    confirmDestroy(id){
    this.id_item = id;
    this.$vs.dialog({
        type:'confirm',
        color: 'danger',
        title: `Bạn có chắc chắn`,
        text: 'Xóa loại dịch vụ này',
        accept:this.destroy
    })
    },
    getCategoryName(category_id) {
        const result = this.listCategory.find((cate)=> cate.id == category_id);
        return result.name
    }
},
mounted() {
    this.listType();
}
};
</script>
<style>
</style>