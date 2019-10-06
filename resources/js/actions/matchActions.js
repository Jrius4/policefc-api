import { MATCH_LOADING,GET_MATCHES } from "./types"
import axios from "axios";

export const setMatchLoading = () =>{
    return {
        type: MATCH_LOADING
    };
};

export const getMatches = () => dispatch => {
    dispatch(setMatchLoading());
    axios.get('/api/matches')
    .then(
        res =>{
            dispatch({
                type:GET_MATCHES,
                payload:res.data
            })
        }
    )
}