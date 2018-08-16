import types from './types'

const mutations = {
  [types.ADD_MENU] (state, menuItems) {
    if (menuItems.length === 0) {
      state.items = []
    } else {
      state.items = menuItems
    }
  }
}
export default mutations
