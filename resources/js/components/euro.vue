<template>
  <div class="Euro">
    <div class="offers py-4">
      <div class="ajax-icon" v-if="loadingStatus">
        <breeding-rhombus-spinner
          :animation-duration="2000"
          :size="65"
          color="#ff1d5e"
        />
      </div>
      <div class="container">
        <div class="offers-cards my-0">
          <div class="head">
            <h2 class="mb-2 text-capitalize text-center">
              <i class="fa fa-thumb-tack" aria-hidden="true"></i> Choisissez
              votre plan
            </h2>
          </div>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs mt-5 pt-5" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu1">
                <i class="fa fa-star-half-o" aria-hidden="true"></i> Version
                Basique</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#menu2">
                <i class="fa fa-star"></i> Version Complète</a
              >
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content pt-3">
            <!-- start basic offers -->
            <div id="menu1" class="container tab-pane fade">
              <div class="row">
                <!-- start plan one -->
                <div class="col-12 col-md-6 col-lg-4 mb-2 mb-md-0">
                  <div class="offer-card">
                    <div class="offer-header border-bottom-0">
                      <h3 class="offer-title">De 1 a 499 élèves</h3>
                      <div class="offer-price">
                        <span class="device">Euro</span
                        ><span class="device"
                          >1550‎€ <label>/2550‎€</label></span
                        >
                      </div>
                    </div>
                    <div class="offer-body">
                      <ul class="offer-list list-unstyled">
                        <li class="offer-list-item extra">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span class="d-inline">
                            tous les modules offerts
                          </span>
                          <a
                            @click="openModalBase('vBasic')"
                            title="modules de base"
                            class="d-inline ml-0"
                            ><span
                              class="d-inline fa fa-eye fa-fw ml-2"
                              style="font-size: 16px"
                            ></span
                          ></a>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>5h de formation gratuites</span>
                        </li>
                        <li class="offer-list-item no-border-bottom">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span
                            >Maintenance de la première année Comprise
                            (350€/an)</span
                          >
                        </li>
                        <li class="offer-list-item extra">
                          <i class="fa fa-external-link-square"></i>
                          <span> Extras </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="780"
                            v-model="plans.basic.plan_one.total_price"
                          />
                          <span>
                            module frais en extra
                            <label class="price_color">600€</label> + prix
                            annuel: <label class="price_color">180‎€</label> =
                            780‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="250"
                            v-model="plans.basic.plan_one.total_price"
                          />
                          <span>
                            module bibliothèque en exact
                            <label class="price_color">150‎€</label> + prix
                            annuel: <label class="price_color">100‎€</label> =
                            250‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="150"
                            v-model="plans.basic.plan_one.total_price"
                          />
                          <span>
                            module transport en exact
                            <label class="price_color">100‎€</label> + prix
                            annuel: <label class="price_color">50‎€</label> =
                            150‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="350"
                            v-model="plans.basic.plan_one.total_price"
                          />
                          <span>
                            module rapport en exact
                            <label class="price_color">250‎€</label> + prix
                            annuel: <label class="price_color">100‎€</label> =
                            350‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="200"
                            v-model="plans.basic.plan_one.total_price"
                          />
                          <span>
                            module personnel en exact
                            <label class="price_color">150‎€</label> + prix
                            annuel: <label class="price_color">50‎€</label> =
                            200‎€
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="offer-footer">
                      <h5
                        class="badge badge-dark d-block py-3 px-2 rounded-0 m-0 display-3"
                      >
                        Prix Total : {{ sum_price_basic_one }} ‎€
                      </h5>
                      <button
                        class="btn btn-block"
                        @click="
                          choosePlane(
                            'version basic de laxial  de 1 a 499 élèves',
                            sum_price_basic_one,
                            plans.basic.plan_one.total_price,
                            1,
                            499
                          )
                        "
                      >
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        choisissez votre plan
                      </button>
                    </div>
                  </div>
                </div>
                <!-- end plan one -->
                <!-- start plan  two-->
                <div class="col-12 col-md-6 col-lg-4 mb-2 mb-md-0">
                  <div class="offer-card offer-centred">
                    <div class="offer-header border-bottom-0">
                      <h3 class="offer-title">De 500 a 999 élèves</h3>
                      <div class="offer-price">
                        <span class="device">Euro</span
                        ><span class="device"
                          >2650‎€ <label>/3650‎€</label></span
                        >
                      </div>
                    </div>
                    <div class="offer-body">
                      <ul class="offer-list list-unstyled">
                        <li class="offer-list-item extra">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span class="d-inline">
                            tous les modules offerts
                          </span>
                          <a
                            @click="openModalBase('vBasic')"
                            title="modules de base"
                            class="d-inline ml-0"
                            ><span
                              class="d-inline fa fa-eye fa-fw ml-2"
                              style="font-size: 16px"
                            ></span
                          ></a>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>5h de formation gratuites</span>
                        </li>
                        <li class="offer-list-item no-border-bottom">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span
                            >Maintenance de la première année Comprise
                            (400€/an)</span
                          >
                        </li>
                        <li class="offer-list-item extra">
                          <i class="fa fa-external-link-square"></i>
                          <span> Extras </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="780"
                            v-model="plans.basic.plan_two.total_price"
                          />
                          <span>
                            module frais en extra
                            <label class="price_color">600€</label> + prix
                            annuel: <label class="price_color">180‎€</label> =
                            780‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="250"
                            v-model="plans.basic.plan_two.total_price"
                          />
                          <span>
                            module bibliothèque en exact
                            <label class="price_color">150‎€</label> + prix
                            annuel: <label class="price_color">100‎€</label> =
                            250‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="150"
                            v-model="plans.basic.plan_two.total_price"
                          />
                          <span>
                            module transport en exact
                            <label class="price_color">100‎€</label> + prix
                            annuel: <label class="price_color">50‎€</label> =
                            150‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="350"
                            v-model="plans.basic.plan_two.total_price"
                          />
                          <span>
                            module rapport en exact
                            <label class="price_color">250‎€</label> + prix
                            annuel: <label class="price_color">100‎€</label> =
                            350‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="200"
                            v-model="plans.basic.plan_two.total_price"
                          />
                          <span>
                            module personnel en exact
                            <label class="price_color">150‎€</label> + prix
                            annuel: <label class="price_color">50‎€</label> =
                            200‎€
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="offer-footer">
                      <h5
                        class="badge badge-dark d-block py-3 px-2 rounded-0 m-0"
                      >
                        Prix Total : {{ sum_price_basic_two }} ‎€
                      </h5>
                      <button
                        class="btn btn-block"
                        @click="
                          choosePlane(
                            'version basic de laxial  de 500 a 999 élèves',
                            sum_price_basic_two,
                            plans.basic.plan_two.total_price,
                            500,
                            999
                          )
                        "
                      >
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        choisissez votre plan
                      </button>
                    </div>
                  </div>
                </div>
                <!-- end plan two -->
                <!-- start plan three-->
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-0">
                  <div class="offer-card">
                    <div class="offer-header border-bottom-0">
                      <h3 class="offer-title">De 1000 et plus</h3>
                      <div class="offer-price">
                        <span class="device">Euro</span
                        ><span class="device">3945€ <label>/4945€</label></span>
                      </div>
                    </div>
                    <div class="offer-body">
                      <ul class="offer-list list-unstyled">
                        <li class="offer-list-item extra">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span class="d-inline">
                            tous les modules offerts
                          </span>
                          <a
                            @click="openModalBase('vBasic')"
                            title="modules de base"
                            class="d-inline ml-0"
                            ><span
                              class="d-inline fa fa-eye fa-fw ml-2"
                              style="font-size: 16px"
                            ></span
                          ></a>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>5h de formation gratuites</span>
                        </li>
                        <li class="offer-list-item no-border-bottom">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span
                            >Maintenance de la première année Comprise
                            (600€/an)</span
                          >
                        </li>
                        <li class="offer-list-item extra">
                          <i class="fa fa-external-link-square"></i>
                          <span> Extras </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="780"
                            v-model="plans.basic.plan_three.total_price"
                          />
                          <span>
                            module frais en extra
                            <label class="price_color">600€</label> + prix
                            annuel: <label class="price_color">180‎€</label> =
                            780‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="250"
                            v-model="plans.basic.plan_three.total_price"
                          />
                          <span>
                            module bibliothèque en exact
                            <label class="price_color">150‎€</label> + prix
                            annuel: <label class="price_color">100‎€</label> =
                            250‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="150"
                            v-model="plans.basic.plan_three.total_price"
                          />
                          <span>
                            module transport en exact
                            <label class="price_color">100‎€</label> + prix
                            annuel: <label class="price_color">50‎€</label> =
                            150‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="350"
                            v-model="plans.basic.plan_three.total_price"
                          />
                          <span>
                            module rapport en exact
                            <label class="price_color">250‎€</label> + prix
                            annuel: <label class="price_color">100‎€</label> =
                            350‎€
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="200"
                            v-model="plans.basic.plan_three.total_price"
                          />
                          <span>
                            module personnel en exact
                            <label class="price_color">150‎€</label> + prix
                            annuel: <label class="price_color">50‎€</label> =
                            200‎€
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="offer-footer">
                      <h5
                        class="badge badge-dark d-block py-3 px-2 rounded-0 m-0"
                      >
                        Prix Total : {{ sum_price_basic_three }} ‎€
                      </h5>
                      <button
                        class="btn btn-block"
                        @click="
                          choosePlane(
                            'version basic de laxial plus de 1000 élèves',
                            sum_price_basic_three,
                            plans.basic.plan_three.total_price,
                            1000,
                            900000
                          )
                        "
                      >
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        choisissez votre plan
                      </button>
                    </div>
                  </div>
                </div>
                <!-- end plan three-->
              </div>
            </div>
            <!-- end basic offers -->

            <!-- start premuim offers -->
            <div id="menu2" class="container tab-pane active">
              <div class="row">
                <!-- start plan one -->
                <div class="col-12 col-md-6 col-lg-4 mb-2 mb-md-0">
                  <div class="offer-card">
                    <div class="offer-header border-bottom-0">
                      <h3 class="offer-title">De 1 a 499 élèves</h3>
                      <div class="offer-price">
                        <span class="device">Euro</span
                        ><span class="device"
                          >2790‎€ <label>/3790‎€</label></span
                        >
                      </div>
                    </div>
                    <div class="offer-body">
                      <ul class="offer-list list-unstyled">
                        <li class="offer-list-item extra">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span class="d-inline">tous les modules offerts</span>
                          <a
                            @click="openModalBase"
                            title="modules de base"
                            class="d-inline ml-0"
                            ><span
                              class="d-inline fa fa-eye fa-fw ml-2"
                              style="font-size: 16px"
                            ></span
                          ></a>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>Portails Administrateurs Offert </span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>Portail Professeurs Offert</span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span> 5H heures de formation gratuites </span>
                        </li>
                        <li class="offer-list-item no-border-bottom">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span
                            >Maintenance de la première année Comprise (720€/An)
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="offer-footer">
                      <h5
                        class="badge badge-dark d-block py-3 px-2 rounded-0 m-0 display-3"
                      >
                        Prix Total : {{ sum_price_advanced_one }} ‎€
                      </h5>
                      <button
                        class="btn btn-block"
                        @click="
                          choosePlane(
                            'version complète de laxial de 1 a 499 élèves',
                            sum_price_advanced_one,
                            plans.advanced.plan_one.total_price,
                            1,
                            499
                          )
                        "
                      >
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        choisissez votre plan
                      </button>
                    </div>
                  </div>
                </div>
                <!-- end plan one -->
                <!-- start plan  two-->
                <div class="col-12 col-md-6 col-lg-4 mb-2 mb-md-0">
                  <div class="offer-card offer-centred">
                    <div class="offer-header border-bottom-0">
                      <h3 class="offer-title">De 500 a 999 élèves</h3>
                      <div class="offer-price">
                        <span class="device">Euro</span
                        ><span class="device"
                          >3780‎€ <label>/4780€</label></span
                        >
                      </div>
                    </div>
                    <div class="offer-body">
                      <ul class="offer-list list-unstyled">
                        <li class="offer-list-item extra">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span class="d-inline">tous les modules offerts</span>
                          <a
                            @click="openModalBase"
                            title="modules de base"
                            class="d-inline ml-0"
                            ><span
                              class="d-inline fa fa-eye fa-fw ml-2"
                              style="font-size: 16px"
                            ></span
                          ></a>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>Portails Administrateurs Offert </span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>Portail Professeurs Offert</span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span> 5H heures de formation gratuites </span>
                        </li>
                        <li class="offer-list-item no-border-bottom">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span
                            >Maintenance de la première année Comprise (810€/an)
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="offer-footer">
                      <h5
                        class="badge badge-dark d-block py-3 px-2 rounded-0 m-0 display-3"
                      >
                        Prix Total : {{ sum_price_advanced_two }} ‎€
                      </h5>
                      <button
                        class="btn btn-block"
                        @click="
                          choosePlane(
                            'version complète de laxial de 500 a 999 élèves',
                            sum_price_advanced_two,
                            plans.advanced.plan_two.total_price,
                            500,
                            999
                          )
                        "
                      >
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        choisissez votre plan
                      </button>
                    </div>
                  </div>
                </div>
                <!-- end plan two -->
                <!-- start plan three-->
                <div class="col-12 col-md-6 col-lg-4 mb-2 mb-md-0">
                  <div class="offer-card">
                    <div class="offer-header border-bottom-0">
                      <h3 class="offer-title">Plus De 1000 élèves</h3>
                      <div class="offer-price">
                        <span class="device">Euro</span>
                        <span class="device">4635‎€ <label>/5635€</label></span>
                      </div>
                    </div>
                    <div class="offer-body">
                      <ul class="offer-list list-unstyled">
                        <li class="offer-list-item extra">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span class="d-inline"
                            >tous les modules offerts
                          </span>
                          <a
                            @click="openModalBase"
                            title="modules de base"
                            class="d-inline ml-0"
                            ><span
                              class="d-inline fa fa-eye fa-fw ml-2"
                              style="font-size: 16px"
                            ></span
                          ></a>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>Portails Administrateurs Offert </span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>Portail Professeurs Offert</span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span> 5H heures de formation gratuites </span>
                        </li>
                        <li class="offer-list-item no-border-bottom">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span
                            >Maintenance de la première année Comprise (945€/an)
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="offer-footer">
                      <h5
                        class="badge badge-dark d-block py-3 px-2 rounded-0 m-0 display-3"
                      >
                        Prix Total : {{ sum_price_advanced_three }} ‎€
                      </h5>
                      <button
                        class="btn btn-block"
                        @click="
                          choosePlane(
                            'version complète de laxial plus de 1000 elèves',
                            sum_price_advanced_three,
                            plans.advanced.plan_three.total_price,
                            1000,
                            900000
                          )
                        "
                      >
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        choisissez votre plan
                      </button>
                    </div>
                  </div>
                </div>
                <!-- end plan three-->
              </div>
            </div>
            <!-- end premuim offers -->
          </div>
        </div>

        <!-- start modal dialog order-->
        <div class="modal fade" v-if="modalStatus == true">
          <div class="modal-shadow" @click="closeModal"></div>
          <div
            class="modal-dialog modal-lg"
            style="overflow-y: initial !important"
          >
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h5 class="modal-title">L'offre {{ form.plan_name }}</h5>
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
                          placeholder="Entrer Votre Nom"
                          :class="{
                            'is-invalid': form.errors.has('society_name'),
                            'form-control': true,
                          }"
                        />
                        <has-error
                          :form="form"
                          field="society_name"
                        ></has-error>
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
                          placeholder="Entrer Votre Email"
                          :class="{
                            'is-invalid': form.errors.has('client_email'),
                            'form-control': true,
                          }"
                        />
                        <has-error
                          :form="form"
                          field="client_email"
                        ></has-error>
                      </div>
                      <!-- end email field -->

                      <!-- start number of student field -->
                      <div class="input-group mb-3 price_parent">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-white icon-form">
                            <i
                              class="fa fa-sort-numeric-asc"
                              aria-hidden="true"
                            ></i>
                          </span>
                        </div>

                        <input
                          @keydown="priceByStudent"
                          @change="priceByStudent"
                          v-model.number="form.nb_students"
                          type="number"
                          min="0"
                          :max="form.max_nbStudents"
                          placeholder="Le Nombre Des Eleves"
                          :class="{
                            'is-invalid':
                              form.errors.has('nb_students') ||
                              form.errors.has('min_nbStudents'),
                            'form-control': true,
                          }"
                        />
                        <has-error :form="form" field="nb_students"></has-error>
                        <has-error
                          :form="form"
                          field="min_nbStudents"
                        ></has-error>
                        <span
                          class="d-block rounded m-0 py-0 text-danger"
                          v-if="msgDepassNbMax"
                        >
                          {{ msgDepassNbMax }}
                        </span>
                      </div>
                      <!-- start number of student field -->
                    </form>
                    <div class="form-group">
                      <label for="" class="label-control">Prix Total </label>
                      <span class="badge badge-total-price"
                        >{{ form.total_price }} ‎€
                      </span>
                      <div class="message">
                        <label class="mt-3 d-block">
                          <i
                            class="fa fa-info-circle fa-2x fa-fw"
                            style="color: #9bc31c"
                          ></i>
                        </label>
                        <ul
                          class="list-unstyled text-dark text-capitalize border p-2 rounded"
                          style="border-color: #9bc31c !important"
                        >
                          <li class="d-flex flex-direction-row">
                            <i
                              class="fa fa-star m-2 mt-1"
                              style="color: #9bc31c"
                            ></i>
                            <label>
                              le prix total comprend les comptes application
                              mobile et IOS
                              <b style="color: #9bc31c">5€/elève</b>
                            </label>
                          </li>
                          <li class="d-flex flex-direction-row">
                            <i
                              class="fa fa-star m-2 mt-1"
                              style="color: #9bc31c"
                            ></i>
                            <label>
                              traitement des injection des listes et injection
                              des données <b style="color: #9bc31c">2€/elève</b>
                            </label>
                          </li>
                          <li class="d-flex flex-direction-row">
                            <i
                              class="fa fa-star m-2 mt-1"
                              style="color: #9bc31c"
                            ></i>
                            <label>
                              les développment spécifique seront facturés sur
                              devis
                            </label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- start modal other information -->
                  <!-- start modal other information -->
                  <div class="col-lg-6 accordion-parent">
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header">
                          <a
                            class="card-link"
                            data-toggle="collapse"
                            href="#one"
                          >
                            <i
                              class="fa fa-chevron-circle-right"
                              aria-hidden="true"
                            ></i>
                            Souhaitez-vous avoir une formation en ligne ?
                          </a>
                        </div>
                        <div id="one" class="show" data-parent="#accordion">
                          <div class="card-body">
                            <input
                              type="checkbox"
                              v-model="form.formation_en_ligne"
                            />
                            oui
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header">
                          <a
                            class="card-link"
                            data-toggle="collapse"
                            href="#two"
                          >
                            <i
                              class="fa fa-chevron-circle-right"
                              aria-hidden="true"
                            ></i>
                            Combien d’heures :
                          </a>
                        </div>
                        <div id="two" class="show" data-parent="#accordion">
                          <div class="card-body">
                            <span>
                              <label class="accordion-hours"> 5H</label> :
                              gratuites
                            </span>
                            <span
                              >Au-delà de
                              <span class="accordion-hours">5H</span> :
                              <span class="accordion-mony">25€ / Heure</span>
                              (Facturation Sur Devis)
                            </span>
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
                        <div id="three" class="show" data-parent="#accordion">
                          <div class="card-body">
                            <span class="d-block other-service">
                              <i class="fa fa-square"></i> Traitement des listes
                              et injections de données :
                              <span class="accordion-mony">2€/élève</span>
                            </span>
                            <span class="d-block other-service">
                              <i class="fa fa-square"></i> Version mobile
                              (Android iOS) ainsi que les portails élèves et
                              parents :
                              <span class="accordion-mony">5€/élèves</span>
                            </span>
                            <span
                              class="d-block other-service no-border-bottom mb-0"
                            >
                              <i class="fa fa-square"></i> Développements
                              Spécifiques:
                              <span class="accordion-mony">20€/Heure</span>
                            </span>
                            <span class="d-block other-service mt-0">
                              <i class="fa fa-square"></i>
                              (Facturation Sur Devis)
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
                  <i class="fa fa-chevron-circle-right"></i> Valider
                </button>
                <button
                  type="button"
                  class="btn btn-danger btn-sm"
                  @click="closeModal"
                >
                  <i class="fa fa-times-circle"></i>
                  Fermer
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal dialog order-->

        <!-- start modal dialog modules de base-->
        <div
          class="modal fade module-base text-capitalize"
          v-if="modalBaseStatus"
        >
          <div class="modal-shadow" @click="closeModalBase"></div>
          <div class="modal-dialog" style="overflow-y: initial !important">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h5 class="modal-title">tous les modules offerts.</h5>
                <button type="button" class="close" @click="closeModalBase">
                  <i class="fa fa-times-circle"></i>
                </button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <!-- start modal fields  -->
                <ul class="list-group module-base">
                  <li class="list-group-item p-1">
                    <i class="fa fa-slack fa-fw"></i>
                    <span
                      >gestion administrative des élèves et des
                      professeurs</span
                    >
                  </li>
                  <li class="list-group-item p-1">
                    <i class="fa fa-slack fa-fw"></i>
                    <span>gestion de scolarité.</span>
                  </li>
                  <li class="list-group-item p-1">
                    <i class="fa fa-slack fa-fw"></i>
                    <span>gestion des éxamens , notes </span>
                  </li>
                  <li class="list-group-item p-1">
                    <i class="fa fa-slack fa-fw"></i>
                    <span>gestion des absences </span>
                  </li>
                  <li class="list-group-item p-1">
                    <i class="fa fa-slack fa-fw"></i>
                    <span>le system de notification </span>
                  </li>
                  <li class="list-group-item p-1">
                    <i class="fa fa-slack fa-fw"></i>
                    <span>module emploi du temps</span>
                  </li>
                  <template v-if="moduleVersion">
                    <li class="list-group-item p-1">
                      <i class="fa fa-slack fa-fw"></i>
                      <span>module frais </span>
                    </li>
                    <li class="list-group-item p-1">
                      <i class="fa fa-slack fa-fw"></i>
                      <span>module bibliothèque </span>
                    </li>
                    <li class="list-group-item p-1">
                      <i class="fa fa-slack fa-fw"></i>
                      <span>module transport </span>
                    </li>
                    <li class="list-group-item p-1">
                      <i class="fa fa-slack fa-fw"></i>
                      <span>module rapport </span>
                    </li>
                    <li class="list-group-item p-1">
                      <i class="fa fa-slack fa-fw"></i>
                      <span>module personnel</span>
                    </li>
                  </template>
                </ul>
                <!-- start modal other information -->
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-danger btn-sm"
                  @click="closeModalBase"
                >
                  <i class="fa fa-times-circle"></i>
                  Fermer
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal dialog modules de base-->
      </div>
      <!-- start msg success  -->
      <div class="msg" v-if="msg != ''">
        <p>{{ msg }}</p>
      </div>
      <!-- start msg error  -->
      <div class="msg bg-danger" v-if="msgError != ''">
        <p>{{ msgError }}</p>
      </div>
    </div>
  </div>
</template>

<script>
import { BreedingRhombusSpinner } from "epic-spinners";
export default {
  components: {
    BreedingRhombusSpinner
  },
  data() {
    return {
      form: new Form({
        society_name: "",
        client_email: "",
        plan_name: "",
        total_price: 0,
        nb_students: "",
        formation_en_ligne: false,
        country: "France",
        min_nbStudents: 1,
        max_nbStudents: 1,
        extraServices: [],
        iosDonee:"7€",// tarif use ios and enter data in the application
      }),
      otherTarif: 7, // tarif inject donner utilisation app mobile / eleve
      modalTotalPrice: 0,
      modalStatus: false,
      modalBaseStatus: false,
      moduleVersion: false,
      loadingStatus: true,
      msg: "",
      msgError: "",
      msgDepassNbMax: "",
      plans: {
        basic: {
          plan_one: {
            total_price: ["1550"]
          },
          plan_two: {
            total_price: ["2650"]
          },
          plan_three: {
            total_price: ["3945"]
          }
        },
        advanced: {
          plan_one: {
            total_price: ["2790"]
          },
          plan_two: {
            total_price: ["3780"]
          },
          plan_three: {
            total_price: ["4635"]
          }
        }
      }
    };
  },
  created() {
    axios.get("/api/localisation").then(res => {
      if (res.statusText == "OK") {
          if(res.data.localisation != null ){
              this.form.country = res.data.localisation;
          }
        if (res.data.localisation === "Morocco" && res.data.localisation!=null) {
          this.$router.push("/");
        }
      }
    });

    setTimeout(() => {
      this.loadingStatus = false;
    }, 700);
  },
  methods: {
    openModalBase(version) {
      if (version === "vBasic") {
        this.moduleVersion = false;
      } else {
        this.moduleVersion = true;
      }
      this.modalBaseStatus = true;
      $("html, body").animate(
        {
          scrollTop: 0
        },
        100
      );
    },
    closeModalBase() {
      this.modalBaseStatus = false;
    },
    closeModal() {
      this.form.reset(); // reset our inputs fields
      this.form.clear(); // clear our errors from filed
      this.modalStatus = false;
    },
    choosePlane(plan_name, total_price, services, min = 1, max = 10) {
      this.form.min_nbStudents = min;
      this.form.max_nbStudents = max;
      this.modalStatus = true;
      this.form.plan_name = plan_name;
      this.form.total_price = total_price;
      this.modalTotalPrice = total_price;
      this.form.extraServices = services;
      $("html, body").animate(
        {
          scrollTop: 0
        },
        100
      );
    },
    priceByStudent(e) {
      var keyCode = e.keyCode ? e.keyCode : e.which;
      if (keyCode > 47 && keyCode < 58) {
        return true;
      } else {
        if (keyCode != 8) {
          e.preventDefault();
        }
        let price_student = this.otherTarif * this.form.nb_students;
        // if the user deppased the maximum number of students
        this.msgDepassNbMax = "";

        if (this.form.nb_students == "") {
          // if input nb_student = ""
          this.form.total_price = this.modalTotalPrice;
        } else if (
          this.form.nb_students > 0 &&
          this.form.nb_students <= this.form.max_nbStudents
        ) {
          // if nb_students > 1000
          if (this.form.nb_students > 1000) {
            let x = this.form.nb_students - 1000;
            x = x / 500;
            x = parseInt(x) * 1000;
            // console.log(this.modalTotalPrice + price_student);
            this.form.total_price = this.modalTotalPrice + price_student + x;
            // console.log(this.form.total_price);
          } else {
            this.form.total_price = this.modalTotalPrice + price_student;
            // console.log("hello");
          }
        } else if (this.form.nb_students > this.form.max_nbStudents) {
          // if nb_students > max number of students in this offer
          let price_student = this.otherTarif * this.form.max_nbStudents;
          this.form.total_price = this.modalTotalPrice + price_student;
          this.form.nb_students = this.form.max_nbStudents;
        }
      }
    },
    saveOrder() {
      // send data from form to controller by api
      this.loadingStatus = true;
      this.form
        .post("/api/newOffer")
        .then(res => {
          if (res.statusText == "OK") {
            this.loadingStatus = false;
            this.closeModal();
            // msg successfull
            this.msg = res.data.msg;
            setTimeout(() => {
              this.msg = "";
            }, 3000);
          }
        })
        .catch(err => {
          this.loadingStatus = false;
          if (err.response != undefined && err.response.status == 500) {
            this.msgError = "Erreur veuillez réessayer plus tard";
            setTimeout(() => {
              this.msgError = "";
            }, 4000);
          }
        });
    }
  },
  computed: {
    sum_price_basic_one() {
      this.plans.basic.plan_one.extra = [
        ...this.plans.basic.plan_one.total_price
      ];
      return this.plans.basic.plan_one.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    },
    sum_price_basic_two() {
      this.plans.basic.plan_two.extra = [
        ...this.plans.basic.plan_two.total_price
      ];
      return this.plans.basic.plan_two.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    },
    sum_price_basic_three() {
      this.plans.basic.plan_three.extra = [
        ...this.plans.basic.plan_three.total_price
      ];
      return this.plans.basic.plan_three.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    },
    sum_price_advanced_one() {
      this.plans.advanced.plan_one.extra = [
        ...this.plans.advanced.plan_one.total_price
      ];
      return this.plans.advanced.plan_one.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    },
    sum_price_advanced_two() {
      this.plans.advanced.plan_two.extra = [
        ...this.plans.advanced.plan_two.total_price
      ];
      return this.plans.advanced.plan_two.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    },
    sum_price_advanced_three() {
      this.plans.advanced.plan_three.extra = [
        ...this.plans.advanced.plan_three.total_price
      ];
      return this.plans.advanced.plan_three.total_price.reduce(function(a, b) {
        return parseInt(a) + parseInt(b);
      }, 0);
    },
    nb_student_price() {
      let price_student = this.otherTarif * this.form.nb_students;
      if (this.form.nb_students == "") {
        // if input nb_student = ""
        this.form.total_price = this.modalTotalPrice;
      } else if (
        this.form.nb_students > 0 &&
        this.form.nb_students <= this.form.max_nbStudents
      ) {
        //  if the number gretehr then max_nbStudents
        this.msgDepassNbMax = "";

        if (this.form.nb_students > 1000) {
          let x = this.form.nb_students - 1000;
          x = x / 500;
          x = parseInt(x) * 1000;
          //   console.log(this.modalTotalPrice + price_student);
          this.form.total_price = this.modalTotalPrice + price_student + x;
          //   console.log(this.form.total_price);
        } else {
          this.form.total_price = this.modalTotalPrice + price_student;
        }
      } // if nb_students > 0
      else if (this.form.nb_students > this.form.max_nbStudents) {
        // if nb_students > max number of students in this offer
        // if the user deppased the maximum number of students
        this.msgDepassNbMax =
          "vous avez atteint le nombre maximal, veuillez choisir le pack adéquat !";

        let price_student = this.otherTarif * this.form.max_nbStudents;
        // console.log(this.otherTarif, this.form.nb_students, price_student);
        this.form.nb_students = this.form.max_nbStudents;
        this.form.total_price = this.modalTotalPrice + price_student;
      }

      return this.form.total_price;
    }
  },
  watch: {
    nb_student_price() {
      console.log("....");
    }
  }
};
</script>
