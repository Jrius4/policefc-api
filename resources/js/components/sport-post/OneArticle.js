import React, { Component } from 'react';
import { connect } from 'react-redux';
import PropTypes from 'prop-types';
import isEmpty from "../../validation/is-empty";
import {Link,withRouter} from 'react-router-dom';
import PostItem from '../Posts/PostItem';
import ContentItem from './ContentItem';
import CommentForm from './CommentForm';

import {getPost,getPosts,getPostComments,getCategories} from '../../actions/postActions';
import Spinner from '../../common/Spinner';
import CommentFeed from './CommentFeed';
import ArticleSingle from './Article';
import ArticlesAside from '../asides/ArticlesAside';


class SingleArticle extends Component {
    constructor(props){
        super(props);
        this.state={
            post:[],
            categories:[],
            posts:[],
            loading:false
        }
    }

    componentDidUpdate(prevProps) {
      // will be true
      const locationChanged =
        this.props.location !== prevProps.location;
  
      // // INCORRECT, will *always* be false because history is mutable.
      // const locationChanged =
      //   this.props.history.location !== prevProps.history.location;
    }
    componentDidMount() {
        this.props.getPost(this.props.match.params.postId);
        this.props.getPostComments(this.props.postId);
        this.props.getCategories();
        this.props.getPosts();
      }
    componentWillUnmount(){
      this.setState({
        post:[],
        categories:[],
        posts:[]
      })
    }
      
  

    render() {
        const { post, loading,posts,categories } = this.props.post;
    let postContent;

    if (post === null || loading || Object.keys(post).length === 0 ||categories===null||posts===null) {
      postContent = <Spinner />;
    } else {
      postContent =(
        <>
        {
          post.map(
            (data,index)=>(
              <div key={index}>
                <ArticleSingle
                image={data.image}
                id={data.id}
                author={data.author}
                category={data.category}
                body={data.body}
                title={data.title}
                />
              </div>
            )
          )
        }
        </>
      );
    }

        return (
            <>
        
        {this.props.post.post!==null||this.props.post.posts!==null||this.props.post.categories!==null?this.props.post.post.map((data,index)=>(
        <div key={index}>
        <div className="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div className="uk-container uk-container-center">
                <section id="tm-top-a" className="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div className="uk-width-1-1 uk-row-first">
                        <div className="uk-panel">
                            <div className="uk-cover-background uk-position-relative head-wrap" style={{height: `290px`,backgroundImage: `url('assets/images/head-bg.jpg')`}}>
                                <img className="uk-invisible" src={`assets/images/head-bg.jpg`} alt="" height="290" width="1920"/>
                                <div className="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>
                                        {data.title}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div className="uk-container uk-container-center alt">
            <ul className="breadcrumb bg-dark text-light">
                <li><Link to={`/`}>Home</Link>{'  '}/{'  '}</li>
                <li><Link to={`/list-posts`}>News</Link>{'  '}/{'  '}</li>
                <li className="uk-active"><span>{data.title}</span></li>
            </ul>
        </div>


        <div className="uk-container uk-container-center">
          <div id="tm-middle" className="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
            <div className="tm-main uk-width-medium-3-4 uk-push-1-4">
              <main id="tm-content" className="tm-content">
                <div className="contentpaneopen">
                  {postContent}
                </div>
              </main>
            </div>
            <ArticlesAside posts={this.props.post.posts} categories={this.props.post.categories}/>
          </div>
        </div>
        </div>)):<Spinner/>}


            </>
            
        )
    }
}
SingleArticle.propTypes = {
    getPost: PropTypes.func.isRequired,
    getPostComments: PropTypes.func.isRequired,
    getPosts: PropTypes.func.isRequired,
    getCategories: PropTypes.func.isRequired,
    post: PropTypes.object.isRequired
  };
  const mapStateToProps = state => ({
    post: state.post
  });
  export default connect(mapStateToProps, { getPost,getPostComments,getPosts,getCategories,getPosts })(withRouter(SingleArticle));
