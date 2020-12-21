<template>
  <div class="maroc">
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
                        <span class="device">Mad</span
                        ><span class="device"
                          >15500MAD <label>/25500MAD</label></span
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
                            (3500dh/an)</span
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
                            value="7800"
                            v-model="plans.basic.plan_one.total_price"
                          />
                          <span>
                            module frais en extra
                            <label class="price_color">6000MAD</label> + prix
                            annuel: <label class="price_color">1800MAD</label> =
                            7800MAD
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
                            module bibliothèque en exact
                            <label class="price_color">1500MAD</label> + prix
                            annuel: <label class="price_color">1000MAD</label> =
                            2500MAD
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
                            module transport en exact
                            <label class="price_color">1000MAD</label> + prix
                            annuel: <label class="price_color">500MAD</label> =
                            1500MAD
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="3500"
                            v-model="plans.basic.plan_one.total_price"
                          />
                          <span>
                            module rapport en exact
                            <label class="price_color">2500MAD</label> + prix
                            annuel: <label class="price_color">1000MAD</label> =
                            3500MAD
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="2000"
                            v-model="plans.basic.plan_one.total_price"
                          />
                          <span>
                            module personnel en exact
                            <label class="price_color">1500MAD</label> + prix
                            annuel: <label class="price_color">500MAD</label> =
                            2000MAD
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="offer-footer">
                      <h5
                        class="badge badge-dark d-block py-3 px-2 rounded-0 m-0 display-3"
                      >
                        Prix Total : {{ sum_price_basic_one }} MAD
                      </h5>
                      <button
                        class="btn btn-block"
                        @click="
                          choosePlane(
                            'version basic de laxial de 1 a 499 élèves',
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
                        <span class="device">Mad</span
                        ><span class="device"
                          >26500MAD <label>/36500MAD</label></span
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
                            (4000DH/an)</span
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
                            value="7800"
                            v-model="plans.basic.plan_two.total_price"
                          />
                          <span>
                            module frais en extra
                            <label class="price_color">6000MAD</label> + prix
                            annuel: <label class="price_color">1800MAD</label> =
                            7800MAD
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="2500"
                            v-model="plans.basic.plan_two.total_price"
                          />
                          <span>
                            module bibliothèque en exact
                            <label class="price_color">1500MAD</label> + prix
                            annuel: <label class="price_color">1000MAD</label> =
                            2500MAD
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="1500"
                            v-model="plans.basic.plan_two.total_price"
                          />
                          <span>
                            module transport en exact
                            <label class="price_color">1000MAD</label> + prix
                            annuel: <label class="price_color">500MAD</label> =
                            1500MAD
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="3500"
                            v-model="plans.basic.plan_two.total_price"
                          />
                          <span>
                            module rapport en exact
                            <label class="price_color">2500MAD</label> + prix
                            annuel: <label class="price_color">1000MAD</label> =
                            3500MAD
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="2000"
                            v-model="plans.basic.plan_two.total_price"
                          />
                          <span>
                            module personnel en exact
                            <label class="price_color">1500MAD</label> + prix
                            annuel: <label class="price_color">500MAD</label> =
                            2000MAD
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
                          choosePlane(
                            'version basic de laxial de 500 a 999 élèves',
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
                        <span class="device">Mad</span
                        ><span class="device"
                          >39450MAD <label>/49450MAD</label></span
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
                            (6000dh/an)</span
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
                            value="7800"
                            v-model="plans.basic.plan_three.total_price"
                          />
                          <span>
                            module frais en extra
                            <label class="price_color">6000MAD</label> + prix
                            annuel: <label class="price_color">1800MAD</label> =
                            7800MAD
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="2500"
                            v-model="plans.basic.plan_three.total_price"
                          />
                          <span>
                            module bibliothèque en exact
                            <label class="price_color">1500MAD</label> + prix
                            annuel: <label class="price_color">1000MAD</label> =
                            2500MAD
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="1500"
                            v-model="plans.basic.plan_three.total_price"
                          />
                          <span>
                            module transport en exact
                            <label class="price_color">1000MAD</label> + prix
                            annuel: <label class="price_color">500MAD</label> =
                            1500MAD
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="3500"
                            v-model="plans.basic.plan_three.total_price"
                          />
                          <span>
                            module rapport en exact
                            <label class="price_color">2500MAD</label> + prix
                            annuel: <label class="price_color">1000MAD</label> =
                            3500MAD
                          </span>
                        </li>
                        <li class="offer-list-item">
                          <input
                            type="checkbox"
                            class="checkbox"
                            value="2000"
                            v-model="plans.basic.plan_three.total_price"
                          />
                          <span>
                            module personnel en exact
                            <label class="price_color">1500MAD</label> + prix
                            annuel: <label class="price_color">500MAD</label> =
                            2000MAD
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
                        <span class="device">Mad</span
                        ><span class="device"
                          >27900MAD <label>/37900MAD</label></span
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
                            @click="openModalBase('vAdvanced')"
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
                          <span>Portails Administrateurs Offert</span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>Portails Professeurs Offert</span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span> 5H heures de formation gratuites </span>
                        </li>
                        <li class="offer-list-item no-border-bottom">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>
                            Maintenance de la première année Comprise
                            (7200DH/an)
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="offer-footer">
                      <h5
                        class="badge badge-dark d-block py-3 px-2 rounded-0 m-0 display-3"
                      >
                        Prix Total : {{ sum_price_advanced_one }} MAD
                      </h5>
                      <button
                        class="btn btn-block"
                        @click="
                          choosePlane(
                            'version complète  de laxial de 1 a 499 élèves',
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
                        <span class="device">Mad</span
                        ><span class="device"
                          >37800MAD <label>/47800MAD</label></span
                        >
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
                            @click="openModalBase('vAdvanced')"
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
                          <span>Portails Administrateurs Offert</span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>Portails Professeurs Offert</span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span> 5H heures de formation gratuites </span>
                        </li>
                        <li class="offer-list-item no-border-bottom">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>
                            Maintenance de la première année Comprise
                            (8100DH/an)
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="offer-footer">
                      <h5
                        class="badge badge-dark d-block py-3 px-2 rounded-0 m-0 display-3"
                      >
                        Prix Total : {{ sum_price_advanced_two }} MAD
                      </h5>
                      <button
                        class="btn btn-block"
                        @click="
                          choosePlane(
                            'version complète  de laxial de 500 a 999 élèves',
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
                        <span class="device">Mad</span>
                        <span class="device"
                          >46350MAD <label>/56350MAD</label></span
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
                            @click="openModalBase('vAdvanced')"
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
                          <span>Portails Administrateurs Offert</span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>Portails Professeurs Offert</span>
                        </li>
                        <li class="offer-list-item">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span> 5H heures de formation gratuites </span>
                        </li>
                        <li class="offer-list-item no-border-bottom">
                          <i class="fa fa-chevron-circle-right"></i>
                          <span>
                            Maintenance de la première année Comprise
                            (9450DH/an)
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="offer-footer">
                      <h5
                        class="badge badge-dark d-block py-3 px-2 rounded-0 m-0 display-3"
                      >
                        Prix Total : {{ sum_price_advanced_three }} MAD
                      </h5>
                      <button
                        class="btn btn-block"
                        @click="
                          choosePlane(
                            'version complète de laxial plus De 1000 elèves',
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
                      <i class="fa fa-id-card fa-fw"></i> Veillez Saisie Votre
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
                        >{{ form.total_price }} MAD
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
                              <span class="accordion-mony">250MAD / Heure</span>
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
                              <span class="accordion-mony">20MAD/élève</span>
                            </span>
                            <span class="d-block other-service">
                              <i class="fa fa-square"></i> Version mobile
                              (Android iOS) ainsi que les portails élèves et
                              parents :
                              <span class="accordion-mony">50MAD/élèves</span>
                            </span>
                            <span
                              class="d-block other-service no-border-bottom mb-0"
                            >
                              <i class="fa fa-square"></i> Développements
                              Spécifiques:
                              <span class="accordion-mony">200MAD/Heure</span>
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
        <!-- end modal dialog -->
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
                <h5 class="modal-title">tous les modules offerts</h5>
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
  //   margin: 80px;
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
    .head {
      color: #fff !important;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      padding: 15px 5px;
      background: $card_header_bg;
      h2 {
        width: 90%;
        margin-bottom: -40px;
        @media (max-width: 768px) {
          font-size: 22px;
          margin-top: 10px;
        }
      }
    }
    .offer-card {
      margin-top: 30px;
      background: #fff;
      border: 1px solid $card_header_bg;
      box-shadow: 0 3px 6px 0px rgba(0, 0, 0, 0.3);
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
          font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
          font-weight: bold;
          span.device {
            text-align: left;
            font-size: 27px;
            font-weight: bold;
            text-transform: uppercase;
            color: $card_centred !important;
            display: block;
            margin: 4px 0 -5px 0;
          }
          span:last-of-type {
            display: block;
            text-align: center;
            margin-bottom: 10px;
            font-size: 16px;
            // color: #444;
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
              a.d-inline {
                cursor: pointer;
                &:hover {
                  color: #555;
                  //   opacity:.9;
                }
              }
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
        h5 {
          font-size: 14px;
        }
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
        color: $card_header_bg;
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
      .message {
        span {
          background: $card_centred;
        }
      }
      .modal-body {
        color: $card_header_bg;
        overflow-y: auto;
        input {
          text-transform: capitalize;
          color: $card_header_bg;
          color: #555;
        }
        .module-base {
          li {
            border: 1px solid $card_header_bg;
            color: #666;
            margin-bottom: 7px;
            border-radius: 3px;
            i {
              color: $card_header_bg;
            }
          }
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

  //   start modal de base
  .modal.module-base {
    border-color: $card_body_bg;
    .modal-content {
      border-color: $card_header_bg;
      box-shadow: 0 0 6px 0px $card_body_bg;
      .modal-header {
        background: $card_body_bg;
        border-color: $card_body_bg;
      }
      .modal-footer {
        border-color: $card_body_bg;
      }
    }
  }

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

.ajax-icon {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background: #fff;
  z-index: 5885489;
  display: flex;
  justify-content: center;
  align-items: center;
  img {
    width: 40px;
    height: 40px;
  }
}
.accordion-parent {
  @media (min-width: 996px) {
    border-left: 1px solid $card_header_bg;
  }
  #accordion {
    border: none;
    .card {
      margin-bottom: 3px;
      border-radius: 0 !important;
      border: none;
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
        .other-service {
          margin-bottom: 5px;
          padding-bottom: 5px;
          border-bottom: 1px dotted $card_header_bg;
          &:last-of-type {
            border-bottom: none;
            padding-bottom: none;
            margin-bottom: none;
          }
          .fa-square {
            font-size: 13px;
            color: $card_header_bg;
          }
        }
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
}
//   message successfully
.msg {
  position: fixed;
  top: 5px;
  right: 5px;
  background: $card_centred;
  color: #fff;
  z-index: 12455555;
  padding: 8px 15px 0;
  font-size: 16px;
}

.no-border-bottom {
  border-bottom: none !important;
}
</style>

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
        country: "Morocco",
        min_nbStudents: 1,
        max_nbStudents: 1,
        extraServices: [],
        iosDonee: "70MAD" // tarif use ios and enter data in the application
      }),
      otherTarif: 70, // tarif inject donner utilisation app mobile / eleve
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
            total_price: ["15500"]
          },
          plan_two: {
            total_price: ["26500"]
          },
          plan_three: {
            total_price: ["39450"]
          }
        },
        advanced: {
          plan_one: {
            total_price: ["27900"]
          },
          plan_two: {
            total_price: ["37800"]
          },
          plan_three: {
            total_price: ["46350"]
          }
        }
      }
    };
  },
  created() {
    axios.get("/api/localisation").then(res => {
      if (res.statusText == "OK") {
        if (res.data.localisation != null) {
          this.form.country = res.data.localisation;
        }
        if (res.data.localisation !== "Morocco" && res.data.localisation!=null) {
          this.$router.push("/fr");
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
          console.log(this.modalTotalPrice + price_student);
          this.form.total_price = this.modalTotalPrice + price_student + x;
          console.log(this.form.total_price);
        } else {
          this.form.total_price = this.modalTotalPrice + price_student;
        }
      } // if nb_students > 0
      else if (this.form.nb_students > this.form.max_nbStudents) {
        // if nb_students > max number of students in this offer

        // if the user deppased the maximum number of students
        this.msgDepassNbMax =
          "vous avez atteint le nombre maximum, veuillez choisir le pack adéquat !";

        let price_student = this.otherTarif * this.form.max_nbStudents;
        console.log(this.otherTarif, this.form.nb_students, price_student);
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
