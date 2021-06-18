import axios from "@/plugins/axios";

export const apiGetHomeCategories = () => {
  return axios.get("/categories");
};

// 六角化商品資料
export const apiGetF2ecampItems = () => {
  return axios.get(`/v2/activities/f2ecamp/items`);
};

// 取得使用者點擊紀錄
export const apiGetF2ecampClicks = payload => {
  return axios.get(`/v2/activities/f2ecamp/clicks`);
};

// 紀錄點擊紀錄
export const apiPostF2ecampClicks = payload => {
  return axios.post(`/v2/activities/f2ecamp/clicks`, payload);
};

// 紀錄免費資源索取
export const apiPostF2ecampFreeRequestions = payload => {
  return axios.post(`/v2/activities/f2ecamp/free_requestions`, payload);
};

// 取得付款訂單
export const apiGetF2ecampOrder = payload => {
  return axios.get(`/v2/activities/f2ecamp/payments/${payload.trade_no}`);
};

// 取得一組單堂課程資訊
export const apiGetActivityCourses = params =>
  axios.get("/v2/activities/courses", { params });
