<template>
  <div class="offers py-4">
    <div class="container">
      <div class="offers-cards my-0">
        <h2 class="mb-4 text-capitalize text-center">
          <i class="fa fa-paper-plane"></i> Choisissez votre plan
        </h2>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mt-4 pt-5" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#menu1"
              ><i class="fa fa-battery-half"></i> Basic</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2"
              ><i class="fa fa-battery-full"></i> Avancée</a
            >
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content pt-3">
          <!-- start basic offers -->
          <div id="menu1" class="container tab-pane active">
            <div class="row">
              <!-- start plan -->
              <div class="col-12 col-sm-6 col-lg-4 mb-4 mb-md-0">
                <div class="offer-card">
                  <div class="offer-header">
                    <h3 class="offer-title">De 1 a 499 élèves</h3>
                    <div class="offer-price">
                      <span class="device">Mad</span
                      ><span>15500MAD <label>/36500MAD</label></span>
                    </div>
                  </div>
                  <div class="offer-body">
                    <ul class="offer-list list-unstyled">
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span> module de base </span>
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span
                          >gestion administrative des élèves et des
                          professeurs</span
                        >
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>5h de formation gratuites</span>
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span
                          >gestion de scolarité. éxamens. notes. absence. le
                          system de notification et emploi du temps
                          compris</span
                        >
                      </li>
                      <li class="offer-list-item no-border-bottom">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>maintenance anuelle 3500dh</span>
                      </li>
                      <li class="offer-list-item extra">
                        <i class="fa fa-external-link-square"></i>
                        <span> Extras </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="6000"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module frais en extra
                          <label class="price_color">6000MAD</label> / prix
                          annuel: <label class="price_color">1800MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="1500"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module bibliothèque en exact
                          <label class="price_color">1500MAD</label>/ prix
                          annuel:
                          <label class="price_color">1000MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="1000"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module transport en exact
                          <label class="price_color">1000MAD</label>/ prix
                          annuel: <label class="price_color">500MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="2500"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module rapport en exact
                          <label class="price_color">2500MAD</label>/ prix
                          annuel: <label class="price_color">1000MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="15000"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module personnele en exact
                          <label class="price_color">15000MAD</label> / prix
                          annuel:
                          <label class="price_color">500MAD</label>
                        </span>
                      </li>
                    </ul>
                  </div>
                  <div class="offer-footer">
                    <h5
                      class="badge badge-dark d-block py-3 px-2 rounded-0 m-0"
                    >
                      Prix Total : {{ sum_price_basic_one }} MAD
                    </h5>
                    <button
                      class="btn btn-block"
                      @click="
                        choosePlane('De 1 a 499 élèves', sum_price_basic_one)
                      "
                    >
                      choisissez votre plan
                    </button>
                  </div>
                </div>
              </div>
              <!-- end plan -->
              <!-- start plan -->
              <div class="col-12 col-sm-6 col-lg-4 mb-4 mb-md-0">
                <div class="offer-card offer-centred">
                  <div class="offer-header">
                    <h3 class="offer-title">De 1 a 499 élèves</h3>
                    <div class="offer-price">
                      <span class="device">Mad</span
                      ><span>15500MAD <label>/36500MAD</label></span>
                    </div>
                  </div>
                  <div class="offer-body">
                    <ul class="offer-list list-unstyled">
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span> module de base </span>
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span
                          >gestion administrative des élèves et des
                          professeurs</span
                        >
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>5h de formation gratuites</span>
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span
                          >gestion de scolarité. éxamens. notes. absence. le
                          system de notification et emploi du temps
                          compris</span
                        >
                      </li>
                      <li class="offer-list-item no-border-bottom">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>maintenance anuelle 3500dh</span>
                      </li>
                      <li class="offer-list-item extra">
                        <i class="fa fa-external-link-square"></i>
                        <span> Extras </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="6000"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module frais en extra
                          <label class="price_color">6000MAD</label> / prix
                          annuel: <label class="price_color">1800MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="1500"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module bibliothèque en exact
                          <label class="price_color">1500MAD</label>/ prix
                          annuel:
                          <label class="price_color">1000MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="1000"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module transport en exact
                          <label class="price_color">1000MAD</label>/ prix
                          annuel: <label class="price_color">500MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="2500"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module rapport en exact
                          <label class="price_color">2500MAD</label>/ prix
                          annuel: <label class="price_color">1000MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="15000"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module personnele en exact
                          <label class="price_color">15000MAD</label> / prix
                          annuel:
                          <label class="price_color">500MAD</label>
                        </span>
                      </li>
                    </ul>
                  </div>
                  <div class="offer-footer">
                    <h5
                      class="badge badge-dark d-block py-3 px-2 rounded-0 m-0"
                    >
                      Prix Total : {{ sum_price_basic_two }} MAD
                    </h5>
                    <button
                      class="btn btn-block"
                      @click="
                        choosePlane('De 1 a 499 élèves', sum_price_basic_two)
                      "
                    >
                      choisissez votre plan
                    </button>
                  </div>
                </div>
              </div>
              <!-- end plan -->
              <!-- start plan -->
              <div class="col-12 col-sm-6 col-lg-4 mb-4 mb-md-0">
                <div class="offer-card">
                  <div class="offer-header">
                    <h3 class="offer-title">De 1 a 499 élèves</h3>
                    <div class="offer-price">
                      <span class="device">Mad</span
                      ><span>15500MAD <label>/36500MAD</label></span>
                    </div>
                  </div>
                  <div class="offer-body">
                    <ul class="offer-list list-unstyled">
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span> module de base </span>
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span
                          >gestion administrative des élèves et des
                          professeurs</span
                        >
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>5h de formation gratuites</span>
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span
                          >gestion de scolarité. éxamens. notes. absence. le
                          system de notification et emploi du temps
                          compris</span
                        >
                      </li>
                      <li class="offer-list-item no-border-bottom">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>maintenance anuelle 3500dh</span>
                      </li>
                      <li class="offer-list-item extra">
                        <i class="fa fa-external-link-square"></i>
                        <span> Extras </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="6000"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module frais en extra
                          <label class="price_color">6000MAD</label> / prix
                          annuel: <label class="price_color">1800MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="1500"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module bibliothèque en exact
                          <label class="price_color">1500MAD</label>/ prix
                          annuel:
                          <label class="price_color">1000MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="1000"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module transport en exact
                          <label class="price_color">1000MAD</label>/ prix
                          annuel: <label class="price_color">500MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="2500"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module rapport en exact
                          <label class="price_color">2500MAD</label>/ prix
                          annuel: <label class="price_color">1000MAD</label>
                        </span>
                      </li>
                      <li class="offer-list-item">
                        <input
                          type="checkbox"
                          class="checkbox"
                          value="15000"
                          v-model="plans.basic.plan_one.total_price"
                        />
                        <span>
                          module personnele en exact
                          <label class="price_color">15000MAD</label> / prix
                          annuel:
                          <label class="price_color">500MAD</label>
                        </span>
                      </li>
                    </ul>
                  </div>
                  <div class="offer-footer">
                    <h5
                      class="badge badge-dark d-block py-3 px-2 rounded-0 m-0"
                    >
                      Prix Total : {{ sum_price_basic_three }} MAD
                    </h5>
                    <button
                      class="btn btn-block"
                      @click="
                        choosePlane('De 1 a 499 élèves', sum_price_basic_three)
                      "
                    >
                      choisissez votre plan
                    </button>
                  </div>
                </div>
              </div>
              <!-- end plan -->
            </div>
          </div>
          <!-- end basic offers -->

          <!-- start premuim offers -->
          <div id="menu2" class="container tab-pane fade">
            <div class="row">
              <!-- start plan -->
              <div class="col-12 col-sm-6 col-lg-4 mb-4 mb-md-0">
                <div class="offer-card">
                  <div class="offer-header">
                    <div class="offer-price"><span>25$</span></div>
                    <h3 class="offer-title">Plan 4</h3>
                  </div>
                  <div class="offer-body">
                    <ul class="offer-list list-unstyled">
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>11Go</span> d'internet
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>1H</span> d'appels
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>25H</span> SMS nationaux
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>11Go</span> d'internet
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>1H</span> d'appels
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>25H</span> SMS nationaux
                      </li>
                    </ul>
                  </div>
                  <div class="offer-footer">
                    <button
                      class="btn btn-block btn-flat"
                      @click="choosePlane(25, 'Plan 4')"
                    >
                      choisissez votre plan
                    </button>
                  </div>
                </div>
              </div>
              <!-- end plan -->

              <!-- start plan -->
              <div class="col-12 col-sm-6 col-lg-4 mb-4 mb-md-0">
                <div class="offer-card">
                  <div class="offer-header">
                    <div class="offer-price"><span>30$</span></div>
                    <h3 class="offer-title">Plan 5</h3>
                  </div>
                  <div class="offer-body">
                    <ul class="offer-list list-unstyled">
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>11Go</span> d'internet
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>1H</span> d'appels
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>25H</span> SMS nationaux
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>11Go</span> d'internet
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>1H</span> d'appels
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>25H</span> SMS nationaux
                      </li>
                    </ul>
                  </div>
                  <div class="offer-footer">
                    <button
                      class="btn btn-block"
                      @click="choosePlane(25, 'Plan 5')"
                    >
                      choisissez votre plan
                    </button>
                  </div>
                </div>
              </div>
              <!-- end plan -->

              <!-- start plan -->
              <div class="col-12 col-sm-6 col-lg-4 mb-4 mb-md-0">
                <div class="offer-card">
                  <div class="offer-header">
                    <div class="offer-price"><span>40$</span></div>
                    <h3 class="offer-title">Plan 6</h3>
                  </div>
                  <div class="offer-body">
                    <ul class="offer-list list-unstyled">
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>11Go</span> d'internet
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>1H</span> d'appels
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>25H</span> SMS nationaux
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>11Go</span> d'internet
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>1H</span> d'appels
                      </li>
                      <li class="offer-list-item">
                        <i class="fa fa-chevron-circle-right"></i>
                        <span>25H</span> SMS nationaux
                      </li>
                    </ul>
                  </div>
                  <div class="offer-footer">
                    <button
                      class="btn btn-block btn-flat"
                      @click="choosePlane(25, 'Plan 6')"
                    >
                      choisissez votre plan
                    </button>
                  </div>
                </div>
              </div>
              <!-- end plan -->
            </div>
          </div>
          <!-- end premuim offers -->
        </div>
      </div>

      <!-- start modal dialog -->
      <div class="modal fade" v-if="modalStatus == true">
        <div class="modal-shadow" @click="closeModal"></div>
        <div
          class="modal-dialog modal-lg"
          style="overflow-y: initial !important"
        >
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h5 class="modal-title">l'offre {{ form.plan_name }}</h5>
              <button type="button" class="close" @click="closeModal">
                <i class="fa fa-times-circle"></i>
              </button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <!-- start modal fields  -->
              <div class="row">
                <div class="col-lg-6">
                  <h5 class="mb-4">
                    <i class="fa fa-id-card"></i> Veillez Saisie Votre
                    Information
                  </h5>

                  <form autocomplete="off" novalidate>
                    <!-- start name field -->
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span
                          class="input-group-text text-white icon-form user-icon"
                        >
                          <i class="fa fa-user"></i>
                        </span>
                      </div>
                      <input
                        v-model="form.society_name"
                        type="text"
                        placeholder="Entrer Le Nom De L'ecole "
                        :class="{
                          'is-invalid': form.errors.has('society_name'),
                          'form-control': true,
                        }"
                      />
                      <has-error :form="form" field="society_name"></has-error>
                    </div>
                    <!-- end name field -->

                    <!-- start email field -->
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-white icon-form">
                          <i class="fa fa-envelope"></i>
                        </span>
                      </div>
                      <input
                        v-model="form.client_email"
                        type="text"
                        placeholder="Enter Ton Email"
                        :class="{
                          'is-invalid': form.errors.has('client_email'),
                          'form-control': true,
                        }"
                      />
                      <has-error :form="form" field="client_email"></has-error>
                    </div>
                    <!-- end email field -->

                    <!-- start number of student field -->
                    <div class="input-group mb-3 price_parent">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-white icon-form">
                          <i class="fa fa-envelope"></i>
                        </span>
                      </div>

                      <input
                        @change="priceByStudent"
                        @keyup="priceByStudent"
                        v-model="form.nb_students"
                        type="number"
                        min="0"
                        placeholder="Le Nombre Des Eleves"
                        :class="{
                          'is-invalid': form.errors.has('nb_students'),
                          'form-control': true,
                        }"
                      />
                      <has-error :form="form" field="nb_students"></has-error>
                    </div>
                    <!-- start number of student field -->
                  </form>
                  <div class="form-group">
                    <label for="" class="label-control">Prix Total </label>
                    <span class="badge badge-total-price"
                      >{{ form.total_price }} MAD
                    </span>
                  </div>
                </div>
                <!-- start modal other information -->
                <div class="col-lg-6 accordion-parent">
                  <div id="accordion">
                    <div class="card">
                      <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#one">
                          <i
                            class="fa fa-chevron-circle-right"
                            aria-hidden="true"
                          ></i>
                          Souhaitez-vous avoir une formation en ligne ?
                        </a>
                      </div>
                      <div
                        id="one"
                        class="collapse show"
                        data-parent="#accordion"
                      >
                        <div class="card-body">
                          <input
                            type="checkbox"
                            @change="formation_en_ligne != formation_en_ligne"
                          />
                          oui/nom
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#two">
                          <i
                            class="fa fa-chevron-circle-right"
                            aria-hidden="true"
                          ></i>
                          Combien d’heures :
                        </a>
                      </div>
                      <div id="two" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <span>
                            <label class="accordion-hours"> 5H</label> :
                            gratuites
                          </span>
                          <span
                            >Au-delà de
                            <span class="accordion-hours">5H</span> :
                            <span class="accordion-mony">250MAD</span> /
                            heure</span
                          >
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <a
                          class="card-link"
                          data-toggle="collapse"
                          href="#three"
                        >
                          <i
                            class="fa fa-chevron-circle-right"
                            aria-hidden="true"
                          ></i>
                          Autres services :
                        </a>
                      </div>
                      <div id="three" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <span
                            >Traitement des listes et injections de données :
                            <span class="accordion-mony">20MAD/élève</span>
                          </span>
                          <span
                            >Version mobile (Android iOS) ainsi que les portails
                            élèves et parents :
                            <span class="accordion-mony">50MA/Délèves</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-primary btn-sm"
                @click="saveOrder"
              >
                <i class="fa fa-chevron-circle-right"></i> Save
              </button>
              <button
                type="button"
                class="btn btn-danger btn-sm"
                @click="closeModal"
              >
                <i class="fa fa-times-circle"></i>
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- end modal dialog -->
    </div>
  </div>
</template>

<style lang="scss">
$card_centred: #9bc31c;
$card_header_bg: #51c1e1;
$card_header_title: #fff;

$card_body_bg: #fff;

$main_color: #333;
$secand_color: #444;

.offers {
  position: relative;
  z-index: 2;
  .nav-tabs {
    border-color: $card_header_bg;
    .nav-link {
      background: transparent;
      color: $card_header_bg;
      &:hover {
        border-color: transparent;
      }
      &.active {
        background: $card_header_bg;
        color: $card_header_title;
        border-color: transparent;
        border-bottom-color: white;
      }
    }
  }
  .offers-cards {
    border: 2px solid $card_header_bg;
    border-radius: 10px;
    overflow: hidden;
    padding: 20px 15px;
    position: relative;
    // text-transform: lowercase;
    background: #fff;
    h2 {
      color: #fff !important;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      padding: 15px 5px;
      background: $card_header_bg;
    }
    .offer-card {
      margin-top: 30px;
      background: #fff;
      border: 1px solid $card_header_bg;
      //   border-radius: 5px 5px 0 0;
      box-shadow: 0 3px 6px 0px rgba(0, 0, 0, 0.3);
      // animation: card-animate ease-in-out infinite alternate-reverse 2s;
      .offer-header {
        border-bottom: 1px dashed #444;
        .offer-title {
          padding: 15px 5px 15px 35px;
          background: $card_header_bg;
          color: $card_header_title;
          font-size: 20px;
          text-align: left;
          margin-bottom: 0;
        }
        .offer-price {
          background-color: white;
          color: $main_color;
          padding: 0px 5px 0px 35px;
          span.device {
            text-align: left;
            font-size: 27px;
            font-weight: bold;
            text-transform: uppercase;
            color: #666;
            display: block;
            margin: 4px 0 -5px 0;
          }
          span:last-of-type {
            display: block;
            text-align: center;
            margin-bottom: 10px;
            color: #444;
            label {
              text-decoration: line-through;
              color: $card_header_bg;
            }
          }
        }
      }
      .offer-body {
        background: $card_body_bg;
        .offer-list {
          .offer-list-item {
            margin-bottom: 7px;
            padding: 6px 4px 8px 8px;
            border-bottom: 1px dashed #444;
            font-size: 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
              Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
              sans-serif;
            font-weight: 500;
            color: $main_color;
            font-size: 14px;
            position: relative;
            i,
            .checkbox {
              position: absolute;
              top: 10px;
              left: 8px;
              color: $card_header_bg;
              font-size: 16px;
            }
            .checkbox {
              top: 12px;
              color: #444;
            }
            span {
              display: block;
              margin-left: 20px;
              text-transform: capitalize;
              label.price_color {
                color: $card_header_bg;
                font-weight: bold;
                letter-spacing: 1px;
              }
            }
            &:last-of-type {
              border-bottom: none;
              padding-bottom: 2px;
            }
            &.extra {
              background: white;
              border-top: 1px solid $card_header_bg;
              border-bottom: 1px solid $card_header_bg;
              font-weight: bold;
              color: $card_header_bg;
              padding: 10px;
              i {
                color: $card_header_bg;
                top: 13px;
              }
            }
            &.no-border-bottom {
              border-bottom: none !important;
            }
            &.total_price {
              padding: 0 !important;
              margin: 0 !important;
              background: $card_header_bg !important;
            }
          }
        }
      }
      .offer-footer {
        // height: 40px;
        .btn {
          background: $card_header_bg;
          color: #fff;
          border: none;
          border-radius: 0 !important;
          font-size: 16px;
          font-weight: bold;
          border-top: 1px solid $card_header_bg;
          transition: 0.2s;
          text-transform: capitalize;
          &:hover {
            // background: $card_header_bg;
            opacity: 0.9;
          }
        }
      }
    }
  }

  //   offer card other style
  .offer-card.offer-centred {
    border: 1px solid $card_centred;
    .offer-header {
      .offer-title {
        padding: 15px 5px 15px 35px;
        background: $card_centred;
      }
      .offer-price span:last-of-type label {
        color: $card_centred;
      }
    }

    .offer-list {
      .offer-list-item {
        i:not(.card-centred) {
          color: $card_centred !important;
        }
        &.extra {
          color: $card_centred !important;
          border-color: $card_centred !important;
          i {
            color: $card_centred !important;
          }
        }
        span {
          label.price_color {
            color: $card_centred !important;
          }
        }
      }
    }
    .offer-footer {
      // height: 40px;
      .btn {
        background: $card_centred;
        border-top: 1px solid $card_centred;
      }
    }
  }

  //   start modal style
  .modal {
    opacity: 1;
    display: block;
    position: absolute;
    height: 100%;
    .modal-shadow {
      position: absolute;
      width: 100%;
      height: 100%;
      left: 0;
      top: 0;
      background: rgba(0, 0, 0, 0.9);
    }

    .modal-content {
      top: 50px;
      border-width: 2px;
      border-color: $card_header_bg !important;
      box-shadow: 0 0 6px 0px $card_header_bg !important;
      border-left-width: 4px;
      .modal-header {
        background: $card_header_bg !important;
        color: $card_header_title;
        border-color: $card_header_bg;
        button.close {
          color: $card_header_title;
        }
      }
      .badge-total-price {
        background: $card_header_bg !important;
        color: $card_header_title;
        padding: 5px 10px;
      }
      .modal-body {
        color: $card_header_bg;
        overflow-y: auto;
        input {
          text-transform: capitalize;
          color: $card_header_bg;
          color: #555;
        }
      }
      .modal-footer {
        border-color: $card_header_bg;
      }

      .icon-form {
        background: $card_header_bg;
        padding: 5px 12px;
        &.user-icon {
          padding: 5px 15px;
        }
      }
    }
  }

  // @keyframes card-animate {
  //   0% {
  //     transform: translateY(0);
  //   }
  //   50% {
  //     transform: translateY(10px);
  //   }
  //   100% {
  //     transform: translateY(-5px);
  //   }
  // }
  .mycheckbox {
    background: red;
  }

  .invalid-feedback {
    margin-left: 43px;
  }
}

// effect snow
body {
  margin: 0 !important;
  padding: 0 !important;
  position: relative;
}

.accordion-parent {
  @media (min-width: 996px) {
    border-left: 1px solid $card_header_bg;
  }
  #accordion {
    .card-header {
      text-transform: capitalize;
      padding: 0;
      background: $card_header_bg;
      color: $card_header_title !important;
      .card-link {
        font-size: 15px;
        padding: 12px 5px;
        color: inherit;
        display: block;
      }
    }
    .card-body {
      border-left: 1px solid $card_header_bg !important;
      border-right: 1px solid $card_header_bg !important;
      border-bottom: 1px solid $card_header_bg !important;
      padding: 10px 8px;
      color: #666;
      margin-bottom: 3px;
      .accordion-mony {
        color: $card_header_bg;
        font-weight: bolder;
        font-size: 14px;
      }
      .accordion-hours {
        font-size: 15px;
        font-weight: bold;
        color: #777;
      }
    }
  }
}
</style>

<script>
export default {
  data() {
    return {
      form: new Form({
        society_name: "",
        client_email: "",
        plan_name: "",
        total_price: 0,
        nb_students: "",
        formation_en_ligne: false,
        lang: "ar_morocco"
      }),
      otherTarif: 70, // tarif inject donner utilisation app mobile / eleve
      modalTotalPrice: 0,
      modalStatus: false,
      plans: {
        basic: {
          plan_one: {
            total_price: ["15500"],
            plan_name: "basic plan 1"
          },
          plan_two: {
            total_price: ["15000"],
            plan_name: "basic plan 2"
          },
          plan_three: {
            total_price: ["12000"],
            plan_name: "basic plan 3"
          }
        },
        advanced: {
          plan_one: {
            total_price: ["23000"],
            plan_name: "basic plan 4"
          },
          plan_two: {
            total_price: ["27000"],
            plan_name: "basic plan 5"
          },
          plan_three: {
            total_price: ["37000"],
            plan_name: "basic plan 6"
          }
        }
      }
    };
  },
  methods: {
    closeModal() {
      this.form.reset(); // reset our inputs fields
      this.form.clear(); // clear our errors from filed
      this.modalStatus = false;
    },
    choosePlane(plan_name, total_price) {
      this.modalStatus = true;
      this.form.plan_name = plan_name;
      this.form.total_price = total_price;
      this.modalTotalPrice = total_price;
      $("html, body").animate(
        {
          scrollTop: 0
        },
        100
      );
    },
    priceByStudent() {
        console.log(typeof this.form.nb_students);
      if (!isNaN(this.form.nb_students)) {
    //       alert('bd')
        let price_student = this.otherTarif * this.form.nb_students;
        console.log(price_student);
        this.form.total_price = this.modalTotalPrice + price_student;
        console.log(this.form.total_price);
    //   } else {
    //       alert('hd')
    //   }
    },
    saveOrder() {
      this.form.post("/api/newOffer").then(res => {
        console.log(res);
      });
    }
  },
  computed: {
    sum_price_basic_one() {
      return this.plans.basic.plan_one.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    },
    sum_price_basic_two() {
      return this.plans.basic.plan_two.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    },
    sum_price_basic_three() {
      return this.plans.basic.plan_three.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    },
    sum_price_advanced_one() {
      return this.plans.advanced.plan_one.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    },
    sum_price_advanced_two() {
      return this.plans.advanced.plan_two.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    },
    sum_price_advanced_three() {
      return this.plans.advanced.plan_three.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    }
  }
};
</script>
