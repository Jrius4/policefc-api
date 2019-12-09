import React, { Component } from 'react'
import PropTypes from 'prop-types'
import {
    Carousel,
    CarouselItem,
    CarouselControl,
    CarouselIndicators,
    CarouselCaption
  } from 'reactstrap';

class NewsHighlights extends Component {
    constructor(props) {
        super(props);
        this.state = { activeIndex: 0,loading:false };
        this.next = this.next.bind(this);
        this.previous = this.previous.bind(this);
        this.goToIndex = this.goToIndex.bind(this);
        this.onExiting = this.onExiting.bind(this);
        this.onExited = this.onExited.bind(this);
        
      }

      onExiting() {
        this.animating = true;
      }
    
      onExited() {
        this.animating = false;
      }
    
      next() {
        if (this.animating) return;
        const nextIndex = this.state.activeIndex === this.props.posts.length - 1 ? 0 : this.state.activeIndex + 1;
        this.setState({ activeIndex: nextIndex });
      }
    
      previous() {
        if (this.animating) return;
        const nextIndex = this.state.activeIndex === 0 ? this.props.posts.length - 1 : this.state.activeIndex - 1;
        this.setState({ activeIndex: nextIndex });
      }
    
      goToIndex(newIndex) {
        if (this.animating) return;
        this.setState({ activeIndex: newIndex });
      }
    render() {
        const { activeIndex } = this.state;

        let postContent,newDisplay;
        postContent= this.props.posts.map((item, index) => (
            <div
                key={index}
                
                style={{background: item.image !==null?`url('/img/${item.image}') no-repeat center center`:`linear-gradient(90deg, rgba(2,0,36,1) 10%, rgba(9,9,121,1) 63%, rgba(1,18,22,1) 100%)`,width:'100%'}}
            >
                <div className="uk-position-cover uk-flex-middle">
                    
                    <div className="uk-container uk-container-center uk-position-cover d-flex justify-content-end py-5">
                        <div className="text-right text-light m-auto">
                            <h1 className="text-light">{item.title}</h1>
                            <p >{item.excerpt}</p>
                            <button>{`Read More`}</button>
                        </div>
                    </div>
    
                </div>
            </div>
        ))

        const slides = this.props.posts.map((item, index) => {
            return (
            
                  <CarouselItem
                className="custom-tag"
                tag="div"
                key={index}
                onExiting={this.onExiting}
                onExited={this.onExited}
              >
                <div style={{backgroundImage: item.image !==null?`url(/img/${item.image})`:`linear-gradient(90deg, rgba(2,0,36,1) 10%, rgba(9,9,121,1) 63%, rgba(1,18,22,1) 100%)`}} className="uk-cover-background uk-position-cover"></div>
                {item.image!==null?<img style={{width: '100%', height: 'auto', opacity: 0}} className="uk-invisible" src={`/img/${item.image}`} alt=""/>:<div style={{width: '100%', height: 'auto', opacity: 0}}></div>}
                
                <CarouselCaption captionText={item.excerpt} captionHeader={item.excerpt} />
                
                <div style={{backgroundColor:'black', opacity: 0.6}}  className="uk-cover-background uk-position-cover"></div>
              </CarouselItem>
            
            );
          });
        return (
            <div>
        <style>
          {
            `.custom-tag {
                max-width: 100%;
                height: 500px;
              }`
          }
        </style>
        <Carousel
          activeIndex={activeIndex}
          next={this.next}
          previous={this.previous}
        >
          <CarouselIndicators items={this.props.posts} activeIndex={activeIndex} onClickHandler={this.goToIndex} />
          {slides}
          <CarouselControl direction="prev" directionText="Previous" onClickHandler={this.previous} />
          <CarouselControl direction="next" directionText="Next" onClickHandler={this.next} />
        </Carousel>
      </div>
        )
    }
}
export default NewsHighlights;
