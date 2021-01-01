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
              <p class="mt-2 mb-4" style="line-height: 25px;" >
                Kenny Blankenship <br>
                Sheptytskoho 1/2 <br>
                Kyiv, Ukraine <br>
                suproshka@gmail.com <br>
                +38 093 85 71 387<br>
              </p>


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
                        <div class="modal-body d-flex" v-for="(user, index) in users" :key="index">

                            <div class="btn-rounded-circle badge-primary">
                               <div style="margin-left:10px; margin-top:8px"> {{user.name.substring(0,2)}}</div>
                            </div>
                           <div  class="font-weight-bold ml-4">
                               {{user.name}}
                             <div class="text-muted">
                                {{user.email}}
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
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">Full Name (required)</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">E-mail address (required)</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">Client's Address (required)</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">Client's Company</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">Country</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label text-muted">Phone:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary w-100">Submit</button>
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
                    <tr v-for="(item, index) in items" :key="index">
                      <td class="td w-50" >
                        <input class="form-control form-control-sm" type="text" v-model="item.name">
                      </td>
                      <td class="td">
                        <input type="text" class="form-control form-control-sm"  v-model="item.qty">
                      </td>
                      <td class="td">
                        <input type="text" class="form-control form-control-sm" v-model="item.rate">
                      </td>
                      <td class="td text-right">

                        {{item.qty * item.rate}}
                      </td>
                      <td class="td">
                        <button @click="deleteRow()" class="btn-rounded-circle badge-danger"><i class="fe fe-delete"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td class="dddd">
                        <button @click="addRow()" class="btn-rounded-circle badge-primary"><i class="fe fe-plus"></i></button> <span class="text-primary ml-2">Add a line item</span>
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
                             <input type="text"  class="form-control form-control-sm" v-model="discount">
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
                Notes
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
    export default {
        props: {
             user_data: { type: String,  default: null },

            },

        data(){
           return {
             items:
             [
                 {
                     name:'',
                     qty: 1,
                     rate: 0,

                 }
             ],
             discount:0,
             subtotal:0,
             users:[],


           }
        },
        mounted() {
            console.log('Component mounted.')
            // console.log( JSON.parse(this.user_data) )
            this.users = JSON.parse(this.user_data)

        },
        methods:{
             addRow:function(){
                 this.items.push({
                      name:'',
                      qty:1,
                      rate:0,

                     })
             },
             deleteRow(index){
             this.items.splice(index,1);
            },
            calculateSubtotal:function(){
              let subtotal = 0
              this.items.forEach(val => {
                  subtotal +=(val.qty)* (val.rate)
              });
              this.subtotal = subtotal
            return subtotal
            },
            calculateTotal: function(){
               let total = 0
               total = this.subtotal - (this.subtotal * (this.discount / 100));
               return total

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
</style>

