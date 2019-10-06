import React from "react";
import PhotoGrid from "react-photo-feed";
// import RadioButtonGroup from "./RadioButtonGroup";
import RadioButtonGroup from "react-photo-feed";
import "react-photo-feed/library/style.css";
import demoPhoto from "./demoPhoto";



const columnsData = [
    {value : 1, label : 'x1'},
    {value : 2, label : 'x2'},
    {value : 3, label : 'x3'},
    {value : 5, label : 'x5'}];
const sortParams = [
    {label : 'oldest', value : 'created-asc'},
    {label : 'newest', value : 'created-desc'},
    {label : 'title asc', value : 'title-asc'},
    {label : 'title desc', value : 'title-desc'}];


class Feed extends React.Component{
    constructor () {
        super ();
        this.state = {
            columns : 2,
            order : null
        }
    }
  render(){
    const { columns, order } = this.state;
    const sortedPhotos = order ? this.getSorted() : demoPhoto;
    return (
        <div>
          <h1>Hello world</h1>
          <RadioButtonGroup items={sortParams} value={order} onClick={this.onSortClick.bind(this)} type="default"/>
          <PhotoGrid columns={columns} photos={sortedPhotos}/>
          
        </div>
      )
  }


  getSorted() {
    const {photos} = this.props;

    const {order} = this.state;
    const [field, type] = order.split('-');
    const sign = type == 'asc' ? 1 : -1;
    return photos.slice().sort((a, b) => (+(a[field] > b[field]) || +(a[field] === b[field]) - 1) * sign);
}

onSortClick(item) {
    this.setState({
        order : item == this.state.order ? null : item
    });
}

onClick(value) {
    this.setState({
        columns : value
    });

}
}

export default Feed

