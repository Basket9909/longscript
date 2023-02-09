const block = document.querySelector('.extensible_block')
const linkUp = block.querySelector('.up')
const linkDown = block.querySelector('.down')

linkUp.addEventListener('click',()=>{
    block.style.height = '500px'
    linkUp.style.display = 'none'
    linkDown.style.display = 'block'
})

linkDown.addEventListener('click',()=>{
    block.style.height = '150px'
    linkUp.style.display = 'block'
    linkDown.style.display = 'none'
})