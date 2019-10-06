import React from 'react'

const SearchBoxInput = ({searchfield,searchChange}) => {
  return (
    <div className="pa2">
      <input
      className="p-2 tc ba br2 b--green bg-lightest-blue"
      type="search"
      placeholder="search players "
      onChange={searchChange}
      />
    </div>
  )
}

export default SearchBoxInput
