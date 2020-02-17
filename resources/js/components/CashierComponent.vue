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
            I'm an example @{{ products.length }} + {{ typeof(products) }}
          </p>
          <p v-if="false">
            I'm an example {{ products }}.
            I'm an example {{ products }}.
          </p>
          <ul class="listx">
            <!-- <li v-for="(t, i) in tests"> -->
            <li v-for="product of products" v-bind:key="product.id">
              <div class="box">
                <article class="media">
                  <div class="media-left">
                    <figure class="image is-64x64">
                      <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <div class="content">
                      <p>
                        <strong>{{ product.name }}</strong> <small>${{ product.price }}</small> <small>/{{ product.id }}</small>
                        <br>
                        {{ product.description }}
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </li>
          </ul>
        </div>
      </div>
        <button class="button is-info is-fullwidth" @click="onClick('yes')">NO</button>
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
                <th>DVD Blu-ray</th>
                <td>1</td>
                <td>$20.00</td>
              </tr>
              <tr>
                <th>Nexus 7</th>
                <td>10</td>
                <td>$499.00</td>
              </tr>
              <tr>
                <th>Toshiba SSD 120GB</th>
                <td>5</td>
                <td>$100.00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <div class="card-footer-item subtotal">
            <div class="field is-horizontal is-grouped">
              <div class="field-label"><label class="label" for="discount">Discount</label></div>
              <div class="field-body">
                <div class="field"><input class="input is-small" type="number" placeholder="5"></div>
              </div>
            </div>
            <div class="field is-horizontal is-grouped">
              <div class="field-label"><label class="label" for="discount">Coupon</label></div>
              <div class="field-body">
                <div class="field"><input class="input is-small" type="number" placeholder="5"></div>
              </div>
            </div>
            <div class="field is-horizontal is-grouped">
              <div class="field-label"><label class="label" for="discount">Subtotal</label></div>
              <div class="field-body">
                <div class="field"><input class="input is-small" type="number" placeholder="5"></div>
              </div>
            </div>
            <div class="field is-horizontal is-grouped">
              <div class="field-label"><label class="label" for="discount">SST</label></div>
              <div class="field-body">
                <div class="field"><p class="is-size-6 has-text-right">$49.99</p></div>
              </div>
            </div>
          </div>
        </div>
          <div class="card-footer">
            <div class="card-footer-item">
              <p class="is-large"><strong>Total: $850.00</strong></p>
            </div>
          </div>
      </div>
      <div class="buttons are-normal is-centered is-grouped">
        <button class="button is-primary" @click="onClick('checkout', 'cash')">Cash</button>
        <button class="button is-info" @click="onClick('checkout', 'cc')">Card</button>
        <button class="button is-success" @click="onClick('checkout', 'cc')">e-Wallet</button>
      </div>
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
    props: ['products'],
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
  .subtotal {
    flex-direction: column;
  }
  .box { margin-top: 15px }
</style>
