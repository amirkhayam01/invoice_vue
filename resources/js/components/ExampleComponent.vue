<template>
    <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-12">

        <!-- Header -->
        <div class="header mt-md-5">
          <div class="header-body">
            <div class="row align-items-center">
              <div class="col">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Payments
                </h6>






                <!-- Title -->
                <h1 class="header-title">
                  Invoice #SDF9823KD
                </h1>

              </div>
              <div class="col-auto">

                <!-- Buttons -->
                <a href="#!" class="btn btn-white lift">
                  Download
                </a>
                <a href="#!" class="btn btn-primary ml-2 lift">
                  Pay
                </a>

              </div>
            </div> <!-- / .row -->
          </div>
        </div>


        <!-- Content -->
        <div class="card card-body p-5">
          <div class="row">
            <div class="col text-right">


            </div>
          </div> <!-- / .row -->

          <div class="row">
            <div class="col-12 col-md-6">

              <!-- Heading -->


              <!-- Text -->

                <div class="mt-2 mb-4 overlay profile-pic" style="line-height: 25px;" >
                    {{editUserForm.auth_user_data.name}}<br>
                    {{editUserForm.auth_user_data.address}} <br>
                    {{editUserForm.auth_user_data.state}}, {{editUserForm.auth_user_data.city}}<br>
                    {{editUserForm.auth_user_data.email}}  <br>
                    {{editUserForm.auth_user_data.phone}}<br>
                    <div class="edit mt-3" data-toggle="modal" data-target="#useredit" data-whatever="@mdo"  data-placement="bottom" title="Edit This"><i class="pencil"></i></div>
                </div>
                <div class="modal fade" id="useredit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <form @submit.prevent="editUser()">
                            <div class="form-group">
                                <label  class="col-form-label">Name:</label>
                                <input type="text" v-model="editUserForm.auth_user_data.name" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label  class="col-form-label">Address:</label>
                                <input type="text" v-model="editUserForm.auth_user_data.address" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label  class="col-form-label">State:</label>
                                <input type="text" v-model="editUserForm.auth_user_data.state" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label  class="col-form-label">Email:</label>
                                <input type="text" v-model="editUserForm.auth_user_data.email" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label  class="col-form-label">Phone:</label>
                                <input type="text" v-model="editUserForm.auth_user_data.phone" class="form-control" id="recipient-name">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary w-100" >Edit User</button>
                            </div>
                            </form>
                        </div>

                     </div>
                    </div>
                </div>


              <p class="text-muted mt-5">Bill To:</p>

               <div class="clickable">
                  <div class="ml-3 my-2" data-toggle="modal" data-target="#exampleModal">
                     <br>
                     <br>


                    <a class="nav-link active"><i class="fe fe-user ml-2"></i> Add Client </a>
                     <br>
                     <br>

                  </div>


              </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Set the client for this invoice</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body d-flex" v-for="(client, index) in clients" :key="index">

                            <div class="btn-rounded-circle badge-primary">
                               <div class="ml-3 mt-2"> {{client.full_name.substring(0,2)}}</div>
                            </div>
                           <div  class="font-weight-bold ml-4">
                               {{client.full_name}}
                             <div>
                                {{client.email}}
                             </div>
                          </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Create New Client</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- model 2 -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Client</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form @submit.prevent="createClient()">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">Full Name (required)</label>
                                    <input type="text" v-model="clientform.full_name" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">E-mail address (required)</label>
                                    <input type="email" v-model="clientform.email" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">Client's Address (required)</label>
                                    <input type="text" v-model="clientform.address" class="form-control" id="recipient-name" required>
                                </div>

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">Client's Company</label>
                                    <input type="text" v-model="clientform.company" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">Country</label>
                                    <input type="text" v-model="clientform.country" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">Phone:</label>
                                    <input type="number" v-model="clientform.phone" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </div>
                            </form>
                        </div>

                        </div>
                    </div>
               </div>

                <!-- // -->

            </div>
            <div class="col-12 col-md-6 text-md-right " >

                <img class="image" src="https://i.pinimg.com/originals/54/7d/c4/547dc4c397e59567e0d18bf418ba7d2e.jpg" alt="" width="200px">

                <div class="mr-4">
                    <h1 class="invoice ">Invoice</h1>
                    <span class="text-muted">Invoice no:</span>
                    <span>INVABC012020</span> <br>
                    <span class="text-muted">Date:</span>
                    <span>Jan 11th, 2020</span> <br>
                    <span class="text-muted">Due Date:</span>
                    <span>Jan 11th, 2020</span> <br>
                </div>







            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-12">

              <!-- Table -->
              <div class="table-responsive">
                <table class="table my-4">
                  <thead class="tablehead">
                    <tr >
                      <th class=" bg-transparent border-top-0">
                        <span class="h6" >Item & Description</span>
                      </th>
                      <th class=" bg-transparent border-top-0">
                        <span class="h6">Quantity</span>
                      </th>
                      <th class=" bg-transparent border-top-0">
                        <span class="h6">Rate</span>
                      </th>
                      <th class="bg-transparent border-top-0">
                        <span class="h6">Amount</span>
                      </th>
                      <th class="bg-transparent border-top-0 text-right">
                           <span class="h6"></span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(item, index) in Itemform.items" :key="index">
                      <td class="td w-50" >
                        <input class="form-control form-control-sm" type="text" v-model="item.name">
                      </td>
                      <td class="td">
                        <input type="number" class="form-control form-control-sm"  v-model.number="item.qty">
                      </td>
                      <td class="td">
                        <input type="number" class="form-control form-control-sm" v-model.number="item.rate">
                      </td>
                      <td class="td text-right">

                        {{item.qty * item.rate}}
                      </td>
                      <td class="td">
                        <button @click="deleteRow(index)" class="btn-rounded-circle badge-danger"><i class="fe fe-delete"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td class="dddd">
                        <button @click="addRow()" class="btn-rounded-circle badge-primary"><i class="fe fe-plus"></i></button> <span @click="addRow()" class="text-primary ml-2 "> <a href="javascript:void(0)"> Add a line item</a></span>
                      </td>
                      <td class="">

                      </td>
                      <td class="">

                      </td>
                      <td class=" text-right">

                      </td>
                    </tr>
                    <tr>
                      <td  colspan="2"  class=" text-right ">
                        <strong>Subtotal</strong>

                      </td>
                      <td colspan="3" class=" text-right ">
                        <span class="">
                         {{calculateSubtotal()}}
                        </span>

                      </td>
                    </tr>
                    <tr>
                        <td  colspan="2"  class=" text-right ">
                          <strong>VAT (10%)</strong>
                        </td>
                        <td colspan="3" class=" text-right border-bottom">
                          <span class="">
                             <input type="number"  class="form-control form-control-sm" v-model.number="Itemform.discount">
                          </span>
                        </td>
                    </tr>

                    <tr>
                        <td  colspan="2"  class=" text-right ">
                          <strong>TOTAL $ (USD)</strong>
                        </td>
                        <td colspan="3" class=" text-right border-bottom">
                          <span class="">
                           {{calculateTotal()}}
                          </span>
                        </td>
                    </tr>

                  </tbody>
                </table>
              </div>


              <hr class="my-5">


              <!-- Title -->
              <h6 class="text-uppercase">
                Notes  <button type="button" @click="createInvoice()" class="btn btn-primary btn-sm ml-4">Create Invoice</button>
              </h6>

              <!-- Text -->
              <p class="text-muted mb-0">
                We really appreciate your business and if there’s anything else we can do, please let us know! Also, should you need us to add VAT or anything else to this order, it’s super easy since this is a template, so just ask!
              </p>

            </div>
          </div> <!-- / .row -->
        </div>

      </div>
    </div> <!-- / .row -->
  </div>
</template>

<script>
import Vue from 'vue'
import { Form, HasError, AlertError } from 'vform'
//Including sweet alert
import Swal from 'sweetalert2'


Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
    export default {
        props: {
             client_data: { type: String,  default: null },
             auth_user:   {type: String, default: null}

            },

        data(){
           return {
        Itemform: new Form({
             items:
             [
                 {
                     name:'',
                     qty: 1,
                     rate: 0,

                 }
             ],
             discount:0,
        }),
             subtotal:0,
             clients:[],

            clientform: new Form({
             full_name: '',
             email: '',
             address: '',
             company: '',
             country: '',
             phone: '',

            }),
           editUserForm : new Form({
               auth_user_data:''
            }),
            // auth_user_data:''


           }
        },
        mounted() {
            console.log('Component mounted.')
            // console.log( JSON.parse(this.user_data) )
            this.clients = JSON.parse(this.client_data)
             this.editUserForm.auth_user_data = JSON.parse(this.auth_user)

        },
        methods:{
            createClient () {
                // Submit the client form via a POST request
                    this.clientform.post('/create-client')
                    .then(({ data }) => { console.log(data) })
                    Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Client added successfully',
                    showConfirmButton: false,
                    timer: 1500
                    })

                },
                createInvoice(){

                if(this.Itemform.items.length) {
                    this.Itemform.post('/create-invoice')
                   .then(({ data }) => { console.log(data) })
                    Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Invoice Created successfully',
                    showConfirmButton: false,
                    timer: 1500
                    })
                 }else{
                   Swal.fire('Please Add Some Item')
                 }




                },
             addRow:function(){
                 this.Itemform.items.push({
                      name:'',
                      qty:1,
                      rate:0,

                     })
             },
             deleteRow(index){
                 console.log(index)
                this.$delete(this.Itemform.items, index)
            },
            calculateSubtotal:function(){
              let subtotal = 0
              this.Itemform.items.forEach(val => {
                  subtotal +=(val.qty)* (val.rate)
              });
              this.subtotal = subtotal
            return subtotal
            },
            calculateTotal: function(){
               let total = 0
               total = this.subtotal - (this.subtotal * (this.Itemform.discount / 100));
               return total

            },
            editUser: function(){
               this.editUserForm.post('/update-user')
                .then(({ data }) => { console.log(data) })
                Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'User Edit successfully',
                showConfirmButton: false,
                timer: 1500
                })
            }

        }

    }
</script>
<style>
    /* image 1 */

        .invoice {
        font-style: normal;
        font-weight: normal;
        font-size: 48px;
        line-height: 56px;
        align-items: center;
        text-align: right;

        color: #3C445F;

        }

        .clickable{
        /* Rectangle 4 */


        background: #FFFFFF;
        border: 1px dashed #A4A8B7;
        box-sizing: border-box;
        border-radius: 8px;
        cursor: pointer

        }

        .addrow {
          cursor: pointer
        }

        .tablehead {
            /* Rectangle 7 */

        background: #F4F4F4;

        }

        .h6 {
            color: #3C445F;
        }

        .td {

            cursor: pointer;
        }

        .svg-icon {
            width: 20px;
        }
        .btn-rounded-circle{
            width: 39px;
            height: 39px;
            border: 1px;
        }
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
         margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;

    }


    .profile-pic {
        position: relative;
        display: inline-block;
        }

    .profile-pic:hover .edit {
        display: block;
    }

    .edit {
        padding-top: 7px;
        padding-right: 7px;
        position: absolute;
        right: 0;
        top: 0;
        display: none;
    }

    .edit a {
        color: #000;
    }
    .pencil {
    width: 10px ;
    height: 50px ;
    background: dimgray ;
    position: relative ;
    transform: rotate(30deg);
    }
    .pencil::before {
    content: "" ;
    position: absolute ;
    width: 10px ;
    height: 10px ;
    background: dimgray ;
    top: -13px ;
    }
    .pencil::after {
    content: "" ;
    position: absolute ;
    width: 8px ;
    height: 8px ;
    background: dimgray ;
    left: 1px ;
    bottom: -4px ;
    transform: rotate(45deg);
    }
</style>

