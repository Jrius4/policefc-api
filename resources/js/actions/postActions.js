import axios from 'axios';

import {
  ADD_POST,
  GET_ERRORS,
  CLEAR_ERRORS,
  GET_POSTS,
  GET_POST,
  POST_LOADING,
  DELETE_POST,GET_POSTS_PAGES,GET_POST_COMMENTS, GET_POST_COMMENTS_PAGES, GET_2_POSTS, GET_POST_CATEGORIES
} from './types';

// Add Post
export const addPost = postData => dispatch => {
  dispatch(clearErrors());
  axios
    .post('/api/posts', postData)
    .then(res =>
      dispatch({
        type: ADD_POST,
        payload: res.data
      })
    )
    .catch(err =>
      dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      })
    );
};

// Get 2 Posts
export const get2Posts = () => dispatch => {
  dispatch(setPostLoading());
  axios
    .get('/api/our-posts')
    .then(res =>
      dispatch({
        type: GET_2_POSTS,
        payload: res.data,
      })
    )
    .catch(err =>
      dispatch({
        type: GET_2_POSTS,
        payload: null
      })
    );
};
// Get Posts
export const getPosts = () => dispatch => {
  dispatch(setPostLoading());
  axios
    .get('/api/sport-posts')
    .then(res =>
      dispatch({
        type: GET_POSTS,
        payload: res.data.data,
        itemsCountPerPage:res.data.per_page,
        totalItemsCount:res.data.total,
        activePage:res.data.current_page,
      })
    )
    .catch(err =>
      dispatch({
        type: GET_POSTS,
        payload: null
      })
    );
};

//get post categories
export const getCategories = () => dispatch =>{
  dispatch(setPostLoading());
  axios
  .get('/api/post-categories')
  .then(res=>
    dispatch({
      type:GET_POST_CATEGORIES,
      payload:res.data
    }))
    .catch(err=>
      dispatch({type:GET_POST_CATEGORIES,
      payload:null}))
}

export const getPostComments = (postId) => dispatch => {
  
  axios
    .get(`/api/sport-posts/${postId}/comments`)
    .then(res =>
      dispatch({
        type: GET_POST_COMMENTS,
        payload: res.data.data,
        itemsCountPerPage:res.data.per_page,
        totalItemsCount:res.data.total,
        activePage:res.data.current_page,
      })
    )
    .catch(err =>
      dispatch({
        type: GET_POSTS,
        payload: null
      })
    );
};
export const handleCommentsPageChange = (postId,pageNumber) => dispatch => {
  dispatch(setPostLoading());
  axios.get(`/api/sport-posts/${postId}/comments?page=${pageNumber}`)
  .then(
      response=>{
        dispatch({
          type: GET_POST_COMMENTS_PAGES,
          payload:response.data.data,
          itemsCountPerPage:response.data.per_page,
          totalItemsCount:response.data.total,
          activePage:response.data.current_page,
      })
  })
  .catch(dispatch({
    type: GET_POSTS,
    payload: null
  }));
}

export const handlePageChange = pageNumber => dispatch => {
  dispatch(setPostLoading());
  axios.get(`/api/sport-posts?page=${pageNumber}`)
  .then(
      response=>{
        dispatch({
          type: GET_POSTS_PAGES,
          payload:response.data.data,
          itemsCountPerPage:response.data.per_page,
          totalItemsCount:response.data.total,
          activePage:response.data.current_page,
      })
  })
  .catch(dispatch({
    type: GET_POSTS,
    payload: null
  }));
}

// Get Post
export const getPost = id => dispatch => {
  dispatch(setPostLoading());
  axios
    .get(`/api/sport-posts/${id}`)
    .then(res =>
      dispatch({
        type: GET_POST,
        payload: res.data
      })
    )
    .catch(err =>
      dispatch({
        type: GET_POST,
        payload: null
      })
    );
};

// Delete Post
export const deletePost = id => dispatch => {
  axios
    .delete(`/api/sport-posts/${id}`)
    .then(res =>
      dispatch({
        type: DELETE_POST,
        payload: id
      })
    )
    .catch(err =>
      dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      })
    );
};

// Add Like
export const addLike = id => dispatch => {
  axios
    .post(`/api/posts/like/${id}`)
    .then(res => dispatch(getPosts()))
    .catch(err =>
      dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      })
    );
};

// Remove Like
export const removeLike = id => dispatch => {
  axios
    .post(`/api/posts/unlike/${id}`)
    .then(res => dispatch(getPosts()))
    .catch(err =>
      dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      })
    );
};

// Add Comment
export const addComment = (postId, commentData) => dispatch => {
  dispatch(clearErrors());
  axios
    .post(`/api/sport-posts/${postId}/comments/`, commentData)
    .then(res =>
      dispatch({
        type: GET_POST,
        payload: res.data
      })
    )
    .catch(err =>
      dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      })
    );
    dispatch(getPost());
};

// Delete Comment
export const deleteComment = (postId, commentId) => dispatch => {
  axios
    .delete(`/api/posts/comment/${postId}/${commentId}`)
    .then(res =>
      dispatch({
        type: GET_POST,
        payload: res.data
      })
    )
    .catch(err =>
      dispatch({
        type: GET_ERRORS,
        payload: err.response.data
      })
    );
};

// Set loading state
export const setPostLoading = () => {
  return {
    type: POST_LOADING
  };
};

// Clear errors
export const clearErrors = () => {
  return {
    type: CLEAR_ERRORS
  };
};
