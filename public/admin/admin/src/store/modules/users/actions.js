import types from './types'

const actions = {
  addMenu: ({ commit }, menuItems) => {
    if (menuItems.length > 0) {
      commit(types.ADD_MENU, menuItems)
    }
  }
}

export default actions
