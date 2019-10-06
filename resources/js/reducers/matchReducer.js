import { MATCH_LOADING, GET_MATCHES } from "../actions/types";

const initialState = {
    matches:[],
    match:[],
    loading:false,
}

export default function (state = initialState,action){
    switch(action.type){
        case MATCH_LOADING:
            return{
                ...state,
                loading:true
            }
        case GET_MATCHES:
                return{
                    ...state,
                    matches:action.payload,
                    loading:false
                }
        default:
            return state;
    }
}