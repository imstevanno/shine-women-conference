import axios from 'axios'

const registrations = {
  namespaced: true,
  state: () => ({
    //
  }),
  actions: {
    SUBMIT_REGISTRATION: async ({commit}, payload) => {
      try {
        let response = await axios({
          method: 'POST',
          data: {
            hash: payload.hash,
            xkey:"45227c5db6568ac1b68733ac8e87eb7886bfc035",
            ...payload.form
          },
          url: 'http://shine.mitra.care/api/registrasi/data'
        })
        if (response && response.status === 200) {
          return Promise.resolve(response)
        } else {
          return Promise.reject(response)
        }
      } catch (e) {
        return Promise.reject(e)
      }
    }
  }
}

export default registrations