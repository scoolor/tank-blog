import axios from 'axios'
import { api } from '../../config/base'

// 借鉴 https://github.com/jcc/blog 项目的思路.

export const http = axios.create({
  baseURL: api
})

// 可以在这里设置请求和响应拦截器
http.interceptors.response.use(function (response) {
  return response
}, function (error) {
  const { response } = error

  if ([401].indexOf(response.status) >= 0) {
    if (response.status === 401 && response.data.error.message !== 'Unauthorized') {
      return Promise.reject(response)
    }
    window.location = '/login'
  }
  return Promise.reject(error)
})

export default function install (Vue) {
  Object.defineProperty(Vue.prototype, '$http', {
    get () {
      return http
    }
  })
}
