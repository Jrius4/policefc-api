import React, { Component } from 'react'
import PropTypes from 'prop-types'
import {getPosts,getCategories,handlePageChange} from '../../actions/postActions'
import {connect} from 'react-redux';
import Pagination from 'react-js-pagination';
import Spinner from '../policefc/common/Spinner';
import Moment from 'react-moment'
import ArticlesAside from '../asides/ArticlesAside';
import PostListContainer from '../Posts/listing/PostListContainer';
import ListPostItem from './ListPostItem';


class PostListDom extends Component {
  constructor(props){
      super(props);
      this.state ={
        posts:[],
        post:[],
        pagePosts:[],
        categories:[],
        activePage:1,
        itemsCountPerPage:null,
        totalItemsCount:null,
        pageRangeDisplayed:3,
        onChange:null,
        loading:false
    };
    this.onChangePage = this.onChangePage.bind(this);
  }

  componentDidMount(){
    this.props.getPosts();
    this.props.getCategories();
  }
  onChangePage(pageNumber){
    this.props.handlePageChange(pageNumber);
  }

  render() {
      let postContent;
      const { posts,itemsCountPerPage,totalItemsCount,activePage, loading } = this.props.post;
      if(this.props.post.posts===null||this.props.post.categories===null||this.props.post.loading===null)
      {
        postContent =<Spinner/>;
      }
      else{
        postContent = (
            <>
                <ListPostItem posts={this.props.post.posts}/> 
            </>
        )
    }

    return (
      <div>
        
        

        <div className="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div className="uk-container uk-container-center">
                <section id="tm-top-a" className="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div className="uk-width-1-1 uk-row-first">
                        <div className="uk-panel">
                            <div className="uk-cover-background uk-position-relative head-match-wrap" style={{height:'250px',backgroundImage: `url(${`assets/images/head-bg.jpg`})`}}>
                                <img className="uk-invisible" src="assets/images/head-bg.jpg" alt=""/>
                                <div className="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>
                                        News
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div className="uk-container uk-container-center alt">
            <ul className="breadcrumb text-light bg-dark">
                <li className="mr-1"><a style={{textDecoration:'none'}} href="/">Home</a></li>/
                <li className="ml-1 uk-active"><span>news list</span></li>
            </ul>
        </div>

        {/* match-listing starting */}


        <div className="uk-container uk-container-center">
            <div id="tm-middle" className="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div className="tm-main uk-width-medium-3-4 uk-push-1-4">
                    <div className="contentpaneopen">
                        <main id="tm-content" className="tm-content">
                            <div className="uk-grid" data-uk-match="">
                                {postContent}
                            </div>
                            <form method="post">
                            {`Page ${activePage}`}
                                    <br/>
                                    <br/>
                                <div className="pagination">
                                    
                                    <Pagination className="pagination-list"
                                        activePage={activePage}
                                        itemsCountPerPage={itemsCountPerPage}
                                        totalItemsCount={totalItemsCount}
                                        pageRangeDisplayed={this.state.pageRangeDisplayed}
                                        onChange={this.onChangePage}
                                        itemClassName='pagenav'
                                        linkClassName='page-link'
                                    />
                                </div>
                                <div className="clearfix"></div>
                            </form>
                        </main>
                    </div>
                </div>
            {/* match-listing end */}

            {/* side-staffs start */}

           <ArticlesAside posts={this.props.post.posts} categories={this.props.post.categories}/>
            {/* side-staffs end */}

            </div>
        </div>

        {/* bottom pic start */}
        <div className="tm-bottom-e-box tm-full-width  ">
            <div className="uk-container uk-container-center">
                <section id="tm-bottom-e" className="tm-bottom-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div className="uk-width-1-1 uk-row-first">
                        <div className="uk-panel">
                            <img src="assets/images/match-list-img-bottom.jpg" alt=""/>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        {/* bottom pic end */}

     

        


      </div>
    )
  }
}
PostListDom.propTypes= {
    getPosts:PropTypes.func.isRequired,
    getCategories:PropTypes.func.isRequired, 
    handlePageChange: PropTypes.func.isRequired,
    post:PropTypes.object.isRequired,  
}

const mapStateToProps = state =>({
    post:state.post,
});
export default connect(mapStateToProps,{getPosts,getCategories,handlePageChange})(PostListDom)