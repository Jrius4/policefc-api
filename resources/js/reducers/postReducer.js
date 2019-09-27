import {ADD_POST,POST_LOADING, GET_POSTS,GET_POSTS_PAGES,DELETE_POST, GET_POST, GET_POST_COMMENTS, GET_POST_COMMENTS_PAGES} from '../actions/types';
const initialState ={
    posts: [],
    post:[],
    comments: [],
    loading:false
};

export default function(state = initialState, action ){
    switch(action.type){
        case POST_LOADING:
            return{
                ...state,
                loading:true
            }
        case GET_POSTS:
            return {
                ...state,
                posts:action.payload,
                itemsCountPerPage:action.itemsCountPerPage,
                totalItemsCount:action.totalItemsCount,
                activePage:action.activePage,
                loading:false
            }
        case GET_POST_COMMENTS:
            return {
                ...state,
                comments:action.payload,
                itemsCountPerPage:action.itemsCountPerPage,
                totalItemsCount:action.totalItemsCount,
                activePage:action.activePage,
                loading:false
            }
        case GET_POSTS_PAGES:
            return {
                ...state,
                posts:action.payload,
                itemsCountPerPage:action.itemsCountPerPage,
                totalItemsCount:action.totalItemsCount,
                activePage:action.activePage,
                loading:false
            }
        case GET_POST_COMMENTS_PAGES:
            return {
                ...state,
                comments:action.payload,
                itemsCountPerPage:action.itemsCountPerPage,
                totalItemsCount:action.totalItemsCount,
                activePage:action.activePage,
                loading:false
            }
        case ADD_POST:
            return {
                ...state,
                posts:[action.payload,...state.posts]
            };
        case GET_POST:
            return{
             ...state,
             post:action.payload,
             loading:false  
            };
        case DELETE_POST:
            return{
                ...state,
                posts: state.posts.filter(post => post._id !== action.payload)
            }
        default:
            return state;
    }
}