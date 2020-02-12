<template>
  <div class="columns cashier">
    <div class="column is-8">
      <div class="card">
        <div class="card-header">
          <div class="card-header-title">
            Cash Register
          </div>
        </div>

        <div class="card-content">
          <p class="is-uppercase">
            I'm an example {{ tests.count }}.
          </p>
          <p>
            I'm an example {{ name }}.
          </p>
          <ul class="listx">
            <li v-for="(t, i) in tests">
              {{ t.name }} - {{ i }}
            </li>
          </ul>
        </div>
        <button class="btn btn-primary btn-large" @click="onClick(yes)">NO</button>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <div class="card-header">
          <div class="card-header-title">
            Checkout
          </div>
        </div>

        <div class="card-content">
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
          <div class="card-footer-item">
            <table class="table is-borderless">
              <tr>
                <td class="w-75">Discount</td>
                <td class="text-right w-25">
                  <div class="input-group input-group-sm">
                    <input type="text" class="input is-small" aria-label="Amount (to the nearest dollar)" :placeholder="discount">
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
        </div>
          <div class="card-footer">
            <div class="card-footer-item">
              <h4>Total: $850.00</h4>
            </div>
          </div>
      </div>
        <button class="button is-primary is-center" @click="onClick('checkout')">Pay $850.00</button>
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
