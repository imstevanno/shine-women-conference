<template>
  <div class="registration-form-container">
    <h1 class="swc-section-title">REGISTRASI</h1>
    <h4 class="early-bird">EARLY BIRD</h4>
    <span
      class="clickable change-package"
      v-if="!isShowingSelectPackage"
      @click="changePackage()"
    >Ubah Paket</span>
    <div class="choose-package" v-if="isShowingSelectPackage">
      <v-select
        v-model="tempSelectedPackage"
        item-text="text"
        item-value="id"
        :items="price.packages"
        :rules="[v => !!v || 'Mohon pilih paket.']"
        label="Pilih Paket"
        style="width: 100%"
        required
      ></v-select>
      <!-- <v-btn depressed small color="primary" class="ml-3" @click="selectPackage()">Pilih</v-btn> -->
      <button class="button swc-button" @click="selectPackage()">
        <span>Pilih</span>
      </button>
    </div>
    <ul v-if="!isShowingSelectPackage" class="attendances">
      <li class="attendance-form" v-for="(form, i) in forms" :key="i">
        <v-form ref="registration-form" class="registration-form">
          <!-- <div class="registration-form" v-if="selectedPackage === 1"> -->
          <h5 class="form-title" v-if="forms.length === 1">Paket Perorangan</h5>
          <h5 class="form-title" v-else>Paket 2 Orang (Peserta ke-{{i + 1}})</h5>
          <v-text-field label="Nama Lengkap*" v-model="form.nama" :rules="rules"></v-text-field>
          <v-text-field label="Email*" v-model="form.email" :rules="emailRules"></v-text-field>
          <v-text-field label="No. Telepon*" v-model="form.telp" :rules="phoneRules"></v-text-field>
          <v-text-field label="Pekerjaan" v-model="form.profesi"></v-text-field>
          <v-text-field label="Asal Gereja" v-model="form.gereja"></v-text-field>
          <v-text-field label="Asal Kota" v-model="form.kota"></v-text-field>
          <v-dialog
            ref="dialog"
            v-model="form.modal"
            :return-value.sync="form.date"
            persistent
            width="290px"
          >
            <template v-slot:activator="{ on }">
              <v-text-field v-model="form.date" label="Tanggal Lahir" readonly v-on="on"></v-text-field>
            </template>
            <v-date-picker v-model="form.date" scrollable>
              <v-spacer></v-spacer>
              <v-btn text color="primary" @click="form.datePickerModal = false">Cancel</v-btn>
              <v-btn text color="primary" @click="$refs.dialog[i].save(form.date)">OK</v-btn>
            </v-date-picker>
          </v-dialog>
          <!-- </div> -->
          <div class="choose-wokshop">
            <h5 class="form-title">Pilih Workshop</h5>
            <!-- <span class="workshop-info">*Wajib memilih 2 workshop.</span> -->
            <div class="workshops">
              <div class="workshop" v-for="(workshop, i) in form.workshops" :key="i">
                <v-checkbox v-model="form.workshops[i].selected" class="mt-1">
                  <template v-slot:label>
                    <div class="workshop-info">
                      <h5>{{workshop.title}}</h5>
                      <span class="speaker">{{workshop.speaker}}</span>
                    </div>
                  </template>
                </v-checkbox>
              </div>
            </div>
            <div
              class="workshop-error-message"
              v-if="workshopErrorMessage[i]"
            >*{{workshopErrorMessage[i]}}</div>
          </div>
        </v-form>
      </li>
    </ul>

    <div class="register-button d-flex justify-center" v-if="!isShowingSelectPackage">
      <span class="button swc-button" @click="register()">
        <span>DAFTAR</span>
      </span>
    </div>
  </div>
</template>
<script>
import sha1 from 'sha1'
import md5 from 'md5'
export default {
  data() {
    return {
      isShowingSelectPackage: true,
      selectedPackage: null,
      tempSelectedPackage: null,
      modal: false,
      workshop: [],
      rules: [value => !!value || "Wajib diisi."],
      phoneRules: [
        value => !!value || "Wajib diisi.",
        value =>
          ((value || "").length > 8 && (value || "").length <= 11) ||
          "Data no Telepon tidak lengkap",
        value => {
          const pattern = /^([0-9][0-9]*)$/;
          return pattern.test(value) || "Harap masukkan angka saja.";
        }
      ],
      emailRules: [
        value => !!value || "Wajib diisi.",
        value => {
          const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return pattern.test(value) || "Alamat email tidak valid.";
        }
      ],
      formTemplate: {
        nama: "",
        tgl_lahir: "",
        asal_kota: "",
        organisasi: "",
        profesi: "",
        telp: "",
        email: "",
        workshop: "",
        // ini yg ga ada
        gereja: "",
        kota: ""
      },
      forms: [],
      workshops: [
        {
          id: "0000001",
          title: "Basic Makeup",
          speaker: "Fedya Makeup",
          selected: false
        },
        {
          id: "0000002",
          title: "Fashion",
          speaker: "Mia Radjagukguk",
          selected: false
        },
        {
          id: "0000003",
          title: "Online Shop",
          speaker: "Hanna (Hanako Baby Shop)",
          selected: false
        },
        {
          id: "0000004",
          title: "Parenting",
          speaker: "Dr Paulus Kurnia",
          selected: false
        }
      ]
    };
  },
  methods: {
    generateForm(packageId) {
      let forms = [];
      let attendance = packageId === 1 ? 1 : 2;
      for (let i = 0; i < attendance; i++) {
        let form = JSON.parse(JSON.stringify(this.formTemplate));
        forms.push({
          ...form,
          workshops: this.workshops,
          datePickerModal: false,
          date: new Date("1990-01-01").toISOString().substr(0, 10)
        });
      }
      this.forms = forms;
    },
    changePackage() {
      this.$swal({
        title: "Ubah Paket?",
        text: "Data sebelumnya akan hilang.",
        icon: "warning",
        buttons: [true, "Ubah"],
        showCancelButton: true
      }).then(async willSave => {
        if (willSave && willSave.value) {
          this.resetPackage();
        } else {
          return false;
        }
      });
    },
    selectPackage() {
      if (!this.tempSelectedPackage) {
        this.$swal("Mohon pilih paket.");
      } else {
        this.selectedPackage = this.tempSelectedPackage;
        // this.tempSelectedPackage = null
        this.isShowingSelectPackage = false;
        this.generateForm(this.selectedPackage);
      }
    },
    resetPackage() {
      this.isShowingSelectPackage = true;
      this.tempSelectedPackage = null;
      this.reset();
      this.resetValidation();
    },
    validate() {
      let registrationForm = this.$refs["registration-form"];
      let isValid = true;
      registrationForm.map((form, i) => {
        let selectedForm = this.forms[i].workshops.filter(workshop => workshop.selected)
        if (!form.validate() || selectedForm.length !== 2) {
          isValid = false;
        }
      });
      if (!isValid) {
        this.$swal({
          title: "Data tidak lengkap",
          text: "Mohon melengkapi data.",
          icon: "warning"
        });
      } else {
        this.$swal({
          title: "Daftar?",
          text: "Pastikan data yang Anda masukkan sudah benar.",
          icon: "warning",
          buttons: [true, "Daftar"],
          showCancelButton: true
        }).then(async willSave => {
          if (willSave && willSave.value) {
            let hash = sha1(md5('shine:5hin32o20'))
            let hash2 = sha1(md5('admin:shine!@#'))
            console.log('adas', hash, hash2)
            this.$store.dispatch('registration/SUBMIT_REGISTRATION', {
              form: this.formattedForm,
              hash
            })
            .then(res => {
              this.$swal({
                title: "Registrasi berhasil",
                text: "Mohon mengecek email Anda.",
                icon: "success"
              });
            })
            .catch(err => {
              this.$swal({
                title: "Registrasi gagal",
                text: "Terjadi kesalahan sistem. Mohon coba beberapa saat lagi.",
                icon: "error"
              });

            })
          }
        });
      }
      // if (this.$refs["registration-form"].validate()) {
      //   console.log("asd", this.$refs["registration-form"].validate());
      //   this.snackbar = true;
      // }
    },
    reset() {
      let registrationForm = this.$refs["registration-form"];
      let isValid = true;
      registrationForm.map((form, i) => {
        form.reset();
      });
    },
    resetValidation() {
      let registrationForm = this.$refs["registration-form"];
      let isValid = true;
      registrationForm.map((form, i) => {
        form.resetValidation();
      });
    },
    register() {
      this.validate();
    },
    generateRandomString (length) {
      let randomString = ''
      let randomAscii
      let low = 65
      let high = 90
      for (let i = 0; i < length; i++) {
        randomAscii = Math.floor((Math.random() * (high - low)) + low)
        randomString += String.fromCharCode(randomAscii)
      }
      return randomString
    },
  },
  computed: {
    formattedForm() {
      let forms = JSON.parse(JSON.stringify(this.forms));
      let attendanceData = {}
      let otherData = {}
      forms.map((form, i) => {
        let selectedWorkshops = form.workshops.filter(workshop => workshop.selected)
        let selectedWorkshopIds = ''
        selectedWorkshops.map((workshop, j) => {
          selectedWorkshopIds = selectedWorkshopIds + ((j > 0) ? (',' + workshop.id) : workshop.id)
        })
        let dataPeserta = 'data_peserta'
        if (forms.length > 1) {
          dataPeserta = 'data_peserta_' + (i+1)
        } 
        attendanceData[dataPeserta] = {
          kode_formulir:"",
          tipe_member: "Peserta",
          jabatan:"",
          nama: form.nama,
          tgl_lahir: new Date(form.date).getTime(),
          asal_kota: form.asal_kota,
          organisasi: form.organisasi,
          profesi: form.profesi,
          telp: form.telp,
          email:form.email,
          workshop: selectedWorkshopIds,
          pembayaran:"Bank Transfer"
        }
      });
      if (forms.length > 1) {
        // otherData['data_pendaftar'] = {}
        otherData['data_pendaftar'] = {
          kode_formulir: "",
          tipe_member:"Peserta",
          nama_pendaftar: this.forms[0].nama,
          email_pendaftar: this.forms[0].email,
          pembayaran:"Bank Transfer"
        }
        otherData['type_registrasi'] = 'group'
      } else {
        otherData['type_registrasi'] = 'personal'
      }
      return {
        ...attendanceData,
        ...otherData
      }
    },
    workshopErrorMessage() {
      let workshopErrorMessage = [];
      if (this.forms.length > 0) {
        this.forms.map(form => {
          let selected = form.workshops.filter(workshop => workshop.selected);
          let error = false;
          if (selected.length > 2) {
            error = "Maksimal dua workshop yang dapat dipilih";
          } else if (selected.length !== 2) {
            error = "Mohon mengisi 2 workshop.";
          }
          workshopErrorMessage.push(error);
        });
      }
      return workshopErrorMessage;
    },
    price() {
      // price first array: paket 1 orang, scond: paket 2 orang
      let price = ["Rp 175.000", "Rp 300.000"];
      let today = new Date();
      let isEarlyBird = true;
      let endOfEarlyBird = new Date("2020-02-21");
      if (today.getTime() >= endOfEarlyBird.getTime()) {
        price = ["Rp 200.000", "Rp 350.000"];
        isEarlyBird = false;
      }
      let packages = [
        {
          text: "Perorangan (" + price[0] + ")",
          id: 1
        },
        {
          text: "Paket 2 Orang (" + price[1] + ")",
          id: 2
        }
      ];
      return {
        packages,
        isEarlyBird
      };
    }
  }
};
</script>