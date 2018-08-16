import types from './types'

const mutations = {
  [types.ADD_MENU] (state, menuItems) {
    if (menuItems.length === 0) {
      state.menuList = []
    } else {
      state.menuList = menuItems
    }
  }
}
export default mutations
