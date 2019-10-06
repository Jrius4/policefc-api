import React, { Component } from 'react';
import PropTypes from 'prop-types';
import Highlights from '../../policefc/highlights/Highlights';
import {getPosts} from '../../../actions/postActions';
import Spinner from '../../../common/Spinner';
import {connect} from 'react-redux';
import AdvancedHighlight from '../../policefc/highlights/AdvancedHighlight';

class Landing extends Component {
  constructor(props)
  {
    super(props);
    this.state = {
      posts:[],
      onChange:null,
      loading:false
    }
  }

  componentDidMount(){
    this.props.getPosts()
  }
  render() {
    const {loading,posts} = this.props.post;
    let highLigthContent;

        if (posts === null || loading) {
          highLigthContent = <Spinner />;
        }
        else{
          highLigthContent = 'cow'
        }
    return (
      <div className="landing-page">
        <AdvancedHighlight posts={posts}/>
      </div>
    )
  }
}
Landing.propTypes = {
  getPosts:PropTypes.func.isRequired,
  post:PropTypes.object.isRequired
}
const mapStateToProps = state =>({
  post:state.post
})
export default connect(mapStateToProps,{getPosts})(Landing);