<template>
  <div class="row justify-content-center cashier">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Cash Register</div>

        <div class="card-body">
          <p>
            I'm an example {{ tests.count }}.
          </p>
          <p>
            I'm an example {{ name }}.
          </p>
          <ul class="list">
            <li v-for="(t, i) in tests">
              {{ t.name }} - {{ i }}
            </li>
          </ul>
        </div>
        <button class="btn btn-primary btn-large" @click="onClick(yes)">NO</button>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">Checkout</div>

        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th style="width: 70%">Items</th>
                <th style="width: 10%; text-justify: center">Qty</th>
                <th style="width: 20%">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>TEST</th>
                <td>1</td>
                <td>$20.00</td>
              </tr>
              <tr>
                <th>TEST</th>
                <td>10</td>
                <td>$499.00</td>
              </tr>
              <tr>
                <th>TEST</th>
                <td>5</td>
                <td>$100.00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <table class="table-borderless">
            <tr>
              <td class="w-75">Discount</td>
              <td class="text-right w-25">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" :placeholder="discount">
                  <div class="input-group-append">
                    <span class="input-group-text">%</span>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Coupon</td>
              <td class="text-right">-</td>
            </tr>
            <tr>
              <td>Sub Total</td>
              <td class="text-right">$799.80</td>
            </tr>
            <tr>
              <td>SST <a href="#">6%</a></td>
              <td class="text-right">$43.00</td>
            </tr>
          </table>
        </div>
        <div class="card-footer">
          <h4>Total: $850.00</h4>
        </div>
      </div>
        <button class="btn btn-primary btn-large col-md-12" @click="onClick('checkout')">Pay $850.00</button>
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Cashierr mounted!')
    },
    data() {
      return {
        name: 'yes',
        discount: 10,
        tax: 6
      }
    },
    props: ['tests'],
    methods: {
      onClick: (click) => {
        console.log(click)
      }
    }
  }
</script>

<style lang="scss">
  button {
    margin-top: 10px;
  }
</style>
