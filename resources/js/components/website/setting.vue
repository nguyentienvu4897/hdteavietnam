<template>
  <div>
      <h3 class="page-title">Cài đặt chung</h3>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body" >
                <div class="form-group">
                  <label>Tên doanh nghiệp</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.company[0].content"
                  />
                  <el-button size="small" @click="showSettingLangExist('company')">Đa ngôn ngữ</el-button>
                  <div class="dropLanguage" v-if="showLang.company == true">
                    <div class="form-group" v-for="item,index in lang" :key="index">
                      <label v-if="index != 0">{{item.name}}</label>
                      <input
                        v-if="index != 0"
                        type="text"
                        size="default"
                        placeholder="Tên doanh nghiệp"
                        class="w-100 inputlang"
                        v-model="objData.company[index].content"
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Mô tả website</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.webname[0].content"
                  />
                  <el-button size="small" @click="showSettingLangExist('webname')">Đa ngôn ngữ</el-button>
                  <div class="dropLanguage" v-if="showLang.webname == true">
                    <div class="form-group" v-for="item,index in lang" :key="index">
                      <label v-if="index != 0">{{item.name}}</label>
                      <input
                        v-if="index != 0"
                        type="text"
                        size="default"
                        placeholder="Mô tả website"
                        class="w-100 inputlang"
                        v-model="objData.webname[index].content"
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Phòng khám thú y</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.address1"
                  />
                </div>
                <div class="form-group">
                  <label>Số điện thoại văn phòng</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone1"
                  />
                </div>
                <div class="form-group">
                  <label>Map văn phòng</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.map1"
                  />
                </div>
                <div class="form-group">
                  <label>Cơ sở 1</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.address2"
                  />
                </div>
                <div class="form-group">
                  <label>Số điện thoại cơ sở 1</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone2"
                  />
                </div>
                <div class="form-group">
                  <label>Map cơ sở 1</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.map2"
                  />
                </div>
                <div class="form-group">
                  <label>Cơ sở 2</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.address3"
                  />
                </div>
                <div class="form-group">
                  <label>Số điện thoại cơ sở 2</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone3"
                  />
                </div>
                <div class="form-group">
                  <label>Map cơ sở 2</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.map3"
                  />
                </div>
                <div class="form-group">
                  <label>Cơ sở 3</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.address4"
                  />
                </div>
                <div class="form-group">
                  <label>Số điện thoại cơ sở 3</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone4"
                  />
                </div>
                <div class="form-group">
                  <label>Map cơ sở 3</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.map4"
                  />
                </div>
                <div class="form-group">
                  <label>Cơ sở 4</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.address5"
                  />
                </div>
                <div class="form-group">
                  <label>Số điện thoại cơ sở 4</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone5"
                  />
                </div>
                <div class="form-group">
                  <label>Map cơ sở 4</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.map5"
                  />
                </div>
                <div class="form-group">
                  <label>Fax</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.fax"
                  />
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.email"
                  />
                </div>
                <div class="form-group">
                  <label>Facebook</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.facebook"
                  />
                </div>
                <div class="form-group">
                  <label>Messenger</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.google"
                  />
                </div>
                <div class="form-group">
                  <label>Code Google analytics</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.GA"
                  />
                </div>
                <div class="form-group">
                  <label>Iframe GG map</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.iframe_map"
                  />
                </div>
                <div class="form-group">
                  <label>Favicon</label>
                  <image-upload type="avatar" v-model="objData.favicon" :title="'favicon'"></image-upload>
                </div>
                <div class="form-group">
                  <label>Logo</label>
                  <image-upload type="avatar" v-model="objData.logo" :title="'logo'"></image-upload>
                </div>
                <!-- <div class="form-group">
                  <label>Ảnh Popup</label>
                  <image-upload type="avatar" v-model="objData.popupimage" :title="'popupimage'"></image-upload>
                </div>
                <div class="form-group">
                  <label>Link Popup</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.linkpopup"
                  />
                </div>
                <div class="form-group">
                  <label>Trạng thái hiển thị popup</label>
                  <vs-select v-model="objData.statusPopup"
                  >
                      <vs-select-item  value="1" text="Hiện" />
                      <vs-select-item  value="0" text="Ẩn" />
                    </vs-select>
                </div> -->
              <vs-button color="primary" @click="saveSetting">Lưu</vs-button>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->
  </div>
</template>


<script>
import { mapActions } from "vuex";
import { required } from "vuelidate/lib/validators";
import TinyMce from "../_common/tinymce";
export default {
  name: "setting",
  data() {
    return {
      showLang:{
        company:false,
        webname:false,
      },
      lang:[],
      objData:
        {
            webname: [
              {
                lang_code:'vi',
                content:''
              }
            ],
            company: [
              {
                lang_code:'vi',
                content:''
              }
            ],
            address1: "",
            address2 : "",
            address3 : "",
            address4 : "",
            address5 : "",
            phone1 : "",
            phone2 : "",
            phone3 : "",
            phone4 : "",
            phone5 : "",
            map1 : "",
            map2 : "",
            map3 : "",
            map4 : "",
            map5 : "",
            fax : "",
            email : "",
            facebook : "",
            google : "",
            GA : "",
            fbPixel : "",
            iframe_map : "",
            favicon : "",
            logo : "",
            footer_content:"",
            popupimage:"",
            statusPopup:1,
            linkpopup:""
        }
    };
  },
  components: {
    TinyMce
  },
  computed: {},
  watch: {},
  methods: {
    ...mapActions(["postSetting","listLanguage", "loadings","getSetting"]),
    saveSetting(){
      this.loadings(true);
      this.postSetting(this.objData).then(response => {
        this.loadings(false);
        this.$success('Cài đặt thành công');
      }).catch(error => {
        this.loadings(false);
        this.$error('Cài đặt thất bại');
      })
    },
    listSettings(){
      this.loadings(true);
      this.getSetting().then(response => {
        this.loadings(false);
        this.objData = response.data;
        this.objData.company = JSON.parse(response.data.company);
        this.objData.webname = JSON.parse(response.data.webname);
      }).catch(error => {
        this.loadings(false);;
      })
    },
    listLang(){
      this.listLanguage().then(response => {
        this.loadings(false);
        this.lang  = response.data
      }).catch(error => {

      })
    },
    showSettingLangExist(value,name = "content"){
      if(value == "company"){
        this.showLang.company = !this.showLang.company
          this.lang.forEach((value, index) => {
              if(!this.objData.company[index]){
                  var oj = {};
                  oj.lang_code = value.code;
                  oj.content = ''
                  this.objData.company.push(oj)
              }
          });
      }
      if(value == "webname"){
        this.showLang.webname = !this.showLang.webname
          this.lang.forEach((value, index) => {
              if(!this.objData.webname[index]){
                  var oj = {};
                  oj.lang_code = value.code;
                  oj.content = ''
                  this.objData.webname.push(oj)
              }
          });

      }
    },
  },
  mounted() {
    this.listSettings();
    this.listLang();
  }
};
</script>