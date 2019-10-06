import {PLAYER_LOADING,GET_PLAYERS, GET_PLAYERS_POSITIONS} from '../actions/types'
const initialState ={
    players: [],
    player:[],
    positions: [],
    loading:false
};

export default function(state = initialState, action ){
    switch(action.type){
        case PLAYER_LOADING:
            return{
                ...state,
                loading:true
            }
        case GET_PLAYERS:
            return {
                ...state,
                players:action.payload,
                loading:false
            }

        case GET_PLAYERS_POSITIONS:
            return{
                ...state,
                positions:action.payload,
                loading:false  
            };
    
        default:
            return state;
    }
}