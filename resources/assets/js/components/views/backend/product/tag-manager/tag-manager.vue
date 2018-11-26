<template>
    <div class="row">
        <div class="col-md-12">
            <el-form label-position="top" label-width="80px">
                <el-form-item :label="item.title" v-for="(item, index) in tagGroupKeys" :key="index">
                    <el-input style="display: none" v-model="fakeInput"></el-input>
                    <el-tag
                        :key="tag"
                        v-for="tag in tagGroup[item.key]"
                        closable
                        :disable-transitions="false"
                        @close="handleClose(tagGroup[item.key], tag)">
                        {{tag}}
                    </el-tag>
                    <el-input
                        class="input-new-tag"
                        v-if="inputVisible[item.key]"
                        v-model="inputValue[item.key]"
                        ref="saveTagInput"
                        size="small"
                        @keyup.enter.native="handleInputConfirm(tagGroup[item.key], item.key)"
                        @blur="handleInputConfirm(tagGroup[item.key], item.key)"
                        >
                    </el-input>
                    <el-button v-else class="button-new-tag" size="small" @click="showInput(item.key)">+ 新增標籤</el-button>
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" @click="onSubmit">儲存</el-button>
                    <el-button>取消</el-button>
                </el-form-item>
            </el-form>
        </div>
        <!-- <div class="col-md-12" v-for="(item, index) in tagGroupKeys" :key="index">
            <h3>{{item.title}}</h3>
            <el-tag
                :key="tag"
                v-for="tag in tagGroup[item.key]"
                closable
                :disable-transitions="false"
                @close="handleClose(tagGroup[item.key], tag)">
                {{tag}}
            </el-tag>
            <el-input
                class="input-new-tag"
                v-if="inputVisible[item.key]"
                v-model="inputValue[item.key]"
                ref="saveTagInput"
                size="small"
                @keyup.enter.native="handleInputConfirm(tagGroup[item.key], item.key)"
                @blur="handleInputConfirm(tagGroup[item.key], item.key)"
                >
            </el-input>
            <el-button v-else class="button-new-tag" size="small" @click="showInput(item.key)">+ 新增標籤</el-button>
        </div> -->
    </div>
</template>

<script>
    import ElementUI from 'element-ui';
    import 'element-ui/lib/theme-chalk/index.css';
    import lang from 'element-ui/lib/locale/lang/zh-TW'
    import locale from 'element-ui/lib/locale'  

    Vue.use(ElementUI);
    locale.use(lang)

    export default {
        mounted () {
            $('.loading-bar').hide()
        },
        data () {
            return {
                tagGroup: {
                    brand: ['Departure', 'CROWN 皇冠', 'NOVITA', 'YUE', 'OOSSACK', 'AD 亞蘭德倫', 'MOM', 'AT 美國旅行者', 'SAMSONITE 新秀麗'],
                    size: ['20吋以下', '20 - 23吋', '23 - 25吋', '27 - 29吋', '30吋以上'],
                    trip: ['當日來回', '3 - 7天', '7 - 14天', 'Long Stay'],
                    price: ['0 - 5000', '5000 - 10000', '10000 - 15000', '15000 - 20000', '20000 以上'],
                    material: ['鋁框', 'PC', 'ABS', '防水尼龍', 'PET', '碳纖維']
                },
                inputVisible: {
                    brand: false,
                    size: false,
                    trip: false,
                    price: false,
                    material: false
                },
                inputValue: {
                    brand: null,
                    size: null,
                    trip: null,
                    price: null,
                    material: null
                },
                fakeInput: null
            }
        },
        computed: {
            tagGroupKeys() {
                let keys = Object.keys(this.tagGroup)

                return keys.map(elm => {
                    let label

                    switch (elm) {
                        case 'brand':
                            label = '品牌 Brand'
                            break;
                        case 'size':
                            label = '尺寸 Size'
                            break;
                        case 'trip':
                            label = '旅程 Trip'
                            break;
                        case 'price':
                            label = '價格 Price'
                            break;
                        case 'material':
                            label = '材質 Material'
                            break;
                        default:
                            break;
                    }

                    return {
                        key: elm,
                        title: label
                    }
                })
            }
        },
        methods: {
            handleClose(group, tag) {
                group.splice(group.indexOf(tag), 1);
            },
            showInput(item) {
                this.inputVisible[item] = true;
                this.$nextTick(_ => {
                    console.log(this.$refs)
                    this.$refs.saveTagInput[0].$refs.input.focus();
                });
            },
            handleInputConfirm(group, item) {
                let inputValue = this.inputValue[item];

                if (inputValue) {
                    group.push(inputValue);
                }
                this.inputVisible[item] = false;
                this.inputValue[item] = '';
            },
            onSubmit() {
                console.log(JSON.stringify(this.tagGroup))

                axios.post('/admin/tag/create', {
                    data: JSON.stringify(this.tagGroup)
                })
            }
        }
    }
</script>
<style>
    .el-tag + .el-tag {
        margin-left: 10px;
    }
    .button-new-tag {
        margin-left: 10px;
        height: 32px;
        line-height: 30px;
        padding-top: 0;
        padding-bottom: 0;
    }
    .input-new-tag {
        width: 90px;
        margin-left: 10px;
        vertical-align: bottom;
    }
</style>