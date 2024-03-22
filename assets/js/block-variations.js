wp.blocks.registerBlockVariation('core/group', {
  name: 'group-grid',
  title: 'Grid',
  icon: 'grid-view',
  description: 'Arrange blocks in a grid',
  support: {
    align: true,
  },
  attributes: {
    layout: { type: 'grid', minimumColumnWidth: '300px' },
    className: 'blockhaus-grid',
    ordered: true,
    namespace: 'blockhaus/core-group-grid',
  },
  scope: ['block', 'inserter'],
  isActive: ({ className }) => {
    return className.includes('grid'); // check if className contains blockhaus-grid and not equals
  },
});
